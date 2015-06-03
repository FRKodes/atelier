<section class="contact">
	<h2 class="icon-02-1 contact-icon"></h2>
	<h3>Tus mensajes son muy importantes para nosotros.</h3> <br><br>
	<p>Déjanos saber cualquier duda o comentario, en breve nos pondremos en contacto contigo.</p>
	{!! Form::open(['id'=>'contactForm', 'url'=>'sendmail'])!!}
		<div class="line">{!! Form::input('text', 'name', null, ['placeholder'=>'*Nombre', 'data-validate'=>'required']) !!} </div>
		<div class="line">{!! Form::input('text', 'company', null, ['placeholder'=>'Empresa/Organización']) !!}</div>
		<div class="line">{!! Form::input('text', 'email', null, ['placeholder'=>'*Correo', 'data-validate'=>'required|email']) !!}</div>
		<div class="line">{!! Form::textarea('message', null, ['placeholder'=>'*Déjanos un mensaje', 'data-validate'=>'required']) !!}</div>
		<div class="alert_fields">Por favor llena los campos marcados con *</div>
		<div class="line">{!! Form::submit('Enviar', ['class'=>'submit_btn']) !!}</div>
		<div class="sent_mail_alert">Gracias!<br><br>Tu correo fué enviado con éxito. En breve nos pondremos en contacto contigo.</div>
	{!! Form::close()!!}
</section>