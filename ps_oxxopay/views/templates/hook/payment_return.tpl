{**
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
 *}

<p>
  {l s='Tu pedido en %s ha sido registrado.' sprintf=[$shop_name] d='Modules.OxxoPay.Shop'}<br/>
  {l s='Para completar tu pago, acude a cualquier tienda OXXO y proporciona el siguiente código:' d='Modules.OxxoPay.Shop'}
</p>

<p style="text-align: center; font-size: 1.5em; font-weight: bold; border: 2px dashed #000; padding: 10px;">
  {$oxxopay_reference}
</p>

<p>
  {l s='Guarda este código y preséntalo al cajero al realizar tu pago.' d='Modules.OxxoPay.Shop'}<br/>
  {l s='También te hemos enviado esta información por correo electrónico.' d='Modules.OxxoPay.Shop'}
</p>

<strong>{l s='Tu pedido será procesado una vez que se confirme tu pago.' d='Modules.OxxoPay.Shop'}</strong>

<p>
  {l s='Si tienes preguntas o necesitas ayuda, por favor contacta a nuestro [1]equipo de soporte[/1].' d='Modules.OxxoPay.Shop' sprintf=['[1]' => "<a href='{$contact_url}'>", '[/1]' => '</a>']}
</p>