
<div id="formContent" style="text-align: left">
    <!-- Tabs Titles -->
    {!! Form::open(['action' => ['ProfileController@update',Auth::id()], 'method' => 'post','id'=>'form']) !!}
    <div class="card-header  justify-content-start" >
        <div class="row d-flex align-items-center">
            <div class="col-4">
            </div>
            <div class="col-8">
                <b id="result" style="font-size: 150%"> Changer le Mot passe :</b>
            </div>
            <div class="col-12 pt-5">
                <div class="row d-flex align-items-center ">

                    <div class="col-4">
                        <b style="font-size: 20px">Email</b>
                    </div>
                    <div class="col-8 justify-content-start">
                        <input type="email" name="email" value="{{$user->email}}" disabled>
                    </div>

                    <div class="col-4">
                        <b style="font-size: 20px">Mot de passe actuel :</b>
                    </div>
                    <div class="col-8 justify-content-start">
                        <input type="password" name="pwActuel" placeholder="ACTUEL" required>
                    </div>

                    <div class="col-4">
                        <b style="font-size: 20px">Nouveau mot de passe :</b>
                    </div>
                    <div class="col-8 justify-content-start">
                        <input id="password" type="password" placeholder="Nouveau" class="form-control @error('password') is-invalid @enderror" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required autocomplete="new-password">
                        <div id="message">
                            <p id="letter" class="invalid" style="line-height:2px;"><b>Minuscule </b> lettere</p>
                            <p id="capital" class="invalid" style="line-height:2px;"><b>Majuscule</b> lettere</p>
                            <p id="number" class="invalid" style="line-height:2px;"><b>Numero</b></p>
                            <p id="length" class="invalid" style="line-height:2px;">Taille Min <b>8 characters</b></p>
                        </div>
                    </div>


                    <div class="col-4">
                        <b style="font-size: 20px">Confirmer mot de passe :</b>
                    </div>
                    <div class="col-8 justify-content-start">
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="CONFIRMER">

                    </div>

                </div>


            </div>
        </div>
        <div id="formFooter" style="margin-top: 20px;">
            <button type="submit" id="btn_pw" name="modify" value="pw" class="btn btn-primary">Confirmer
            </button>
        </div>
    </div>
    {!! Form::hidden('_method','PUT') !!}
    {!! Form::close() !!}
</div>
