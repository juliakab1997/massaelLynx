@extends('templates.app')
@section('title')
   Reservation
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
                Telephone: +243 974 118 826<br>
                E-mail: <a href="#">juliamkb1997@gmail.com</a>
            </div>
            <div class="grid_6 preffix_1">
                <h3>Dite nous en plus</h3>
                <form id="form">
                    <input type="hidden" name="services" value="{{ $type }}">

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
                        <span class="error-message">Adresse mail invalide</span>
                    </label>
                    <label class="numero">
                        <input type="text" placeholder="Votre telephone:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phpne.</span>
                    </label>
                    {{-- <label class="nombre">
                        <input type="text" placeholder="quatity:" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label> --}}
                    <label class="etat">
                        <input type="text" placeholder="etat" data-constraints="@Required @Email" />
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="phone">
                        <input type="text" placeholder="Votre telephone:" data-constraints="@Required @JustNumbers"/>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label>
                    {{-- <label class="phone">
                        <select name="services" id="">
                            <option value="photo">Photographie</option>
                            <option value="decoration">Decoration</option>
                        </select>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*This is not a valid phone.</span>
                    </label> --}}
                    <label class="message">
                        <textarea placeholder="Parlez-nous brievement de votre evenement:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        <span class="empty-message">*This field is required.</span>
                        <span class="error-message">*The message is too short.</span>
                    </label>
                    <div>
                        <div class="clear"></div>
                        <div class="btns">
                            <a href="#" data-type="reset" class="btn bt__2">Nettoyer</a>
                            <a href="#" data-type="submit" class="btn bt__2">Reserver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('content')