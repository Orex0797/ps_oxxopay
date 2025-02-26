<?php
/**
 * 2007-2024 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2024 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @since 1.7.0
 *
 * @property Ps_OxxoPay $module
 */
class Ps_OxxoPayValidationModuleFrontController extends ModuleFrontController
{
    /**
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
        $cart = $this->context->cart;

        // Verificar si el carrito es válido
        if ($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        // Verificar que el módulo sigue disponible
        $authorized = false;
        foreach (Module::getPaymentModules() as $module) {
            if ($module['name'] == 'ps_oxxopay') {
                $authorized = true;
                break;
            }
        }
        if (!$authorized) {
            exit($this->module->getTranslator()->trans('Este método de pago no está disponible.', [], 'Modules.OxxoPay.Shop'));
        }

        // Cargar datos del cliente
        $customer = new Customer($cart->id_customer);
        if (!Validate::isLoadedObject($customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        // Obtener moneda y total del pedido
        $currency = $this->context->currency;
        $total = (float) $cart->getOrderTotal(true, Cart::BOTH);

        // Obtener la referencia de pago en OXXO
        $oxxo_reference = Configuration::get('PS_OXXOPAY_REFERENCE');
        $oxxo_info = nl2br(Configuration::get('PS_OXXOPAY_INFO') ?: '');

        // Variables para email de confirmación
        $mailVars = [
            '{oxxopay_reference}' => $oxxo_reference,
            '{oxxopay_info}' => $oxxo_info,
        ];

        // Validar el pedido y crearlo en PrestaShop
        $orderStatus = (int) Configuration::get('PS_OS_PAYMENT'); // Estado de "Esperando pago"
        $this->module->validateOrder(
        (int) $cart->id,
        $orderStatus,
        $total,
        $this->module->displayName,
        null,
        [],
        (int) $currency->id,
        false,
        $customer->secure_key
);
        
        // Redirigir a la confirmación del pedido
        Tools::redirect('index.php?controller=order-confirmation&id_cart=' . (int) $cart->id .
            '&id_module=' . (int) $this->module->id .
            '&id_order=' . (int) $this->module->currentOrder .
            '&key=' . $customer->secure_key);
    }
}
