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
