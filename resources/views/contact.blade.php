@extends('templates.app')
@section('title')
   Contact
@endsection
@section('content')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="grid_5">
                <h3>Information de Contact</h3>
                Massael service <br>
                9870 St Vincent Place,<br>
                Glasgow, DC 45 Fr 45.<br>
                Telephone: +1 800 603 6035<br>
                E-mail: <a href="#">mail@demolink.org</a>
            </div>
            <div class="grid_6 preffix_1">
                <h3>Contactez-nous</h3>
                <form id="form">
                    <div class="success_wrapper">
                        <div class="success-message">Merci de nous avoir contacter</div>
                    </div>
                    <label class="name">
                        <input type="text" placeholder="Votre Nom:" data-constraints="@Required @JustLetters" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid name.</span>
                    </label>
                    <label class="email">
                        <input type="text" placeholder="Votre E-mail:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="phone">
                        <input type="text" placeholder="Votre telephone:" data-constraints="@Required @JustNumbers"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    <label class="message">
                        <textarea placeholder="Laissez-nous un message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>
                    <div>
                        <div class="clear"></div>
                        <div class="btns">
                            <a href="#" data-type="reset" class="btn bt__2">Nettoyer</a>
                            <a href="#" data-type="submit" class="btn bt__2">Envoyer</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')