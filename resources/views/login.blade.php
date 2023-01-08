@extends('layouts.app')

@section('content')
    <div class="block_contentLogin">
        <div class="blockLogin">
            <div class="menu_MailPhone">
                <div class="menu_blockMail formAuth" data-login="true">
                    Телефон
                </div>
                <div class="menu_blockPhone formAuth" data-login='false'>
                    СМС-код
                </div>
            </div>
            <form method="post" id="PhonePasswordLogin" class="AuthRegister">
                    <div class="menu_inputs">
                        <div class="AuthRegister_input">
                            <input type="text" placeholder="Телефон" class="phone_input">
                        </div>
                        <div class="AuthRegister_input">
                            <input type="password" placeholder="Пароль">
                        </div>
                    </div>
                    <div class="menu_buttons">
                        <div class="menu_buttons_RecoverLogin">
                            <div class="button_login">
                                <button type="button">
                                    Войти
                                </button>
                            </div>
                        </div>
                        <div class="menu_button_Register">
                            <div class="button_register">
                                <button type="button" class="buttonRegister">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
            <form action="" method="post" id="phoneLogin" style="display: none" class="AuthRegister">
                <div class="menu_inputs">
                    <div class="AuthRegister_input">
                        <input type="text" placeholder="Телефон" class="phone_input" pattern="\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}" >
                    </div>
                </div>
                <div class="menu_buttons">
                    <div class="menu_buttons_RecoverLogin">
                        <div class="button_login">
                            <button type="button">
                                Войти
                            </button>
                        </div>
                    </div>
                    <div class="menu_button_Register">
                        <div class="button_register">
                            <button type="button" class="buttonRegister">
                                Зарегистрироваться
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <form method="post" id="register" style="display: none" class="AuthRegister">
                @csrf
                <div class="menu_inputs">
                    <div class="AuthRegister_input">
                        <input type="text" placeholder="Телефон" name="phone" class="phone_input" id="registerPhone">
                    </div>
                </div>
                <div class="menu_buttons">
                    <div class="menu_button_Register">
                        <div class="button_register">
                            <button type="submit" id="SMSRegisterContinue">
                                Продолжить
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" method="post" id="keySMSRegister" style="display: none" class="AuthRegister">
                @csrf
                <div class="menu_inputs">
                    <div class="AuthRegister_input">
                        <input type="number" placeholder="СМС-КОД" name="smsKey" id="smsKeyAuth">
                    </div>
                </div>
                <div class="menu_buttons">
                    <div class="menu_buttons_RecoverLogin">
                        <div class="button_login">
                            <button type="submit" id="KeySMSRegisterSend">
                                Отправить 
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{url('/add-customer')}}" method="post" id="DataCustomerRegister" style="display: none" class="AuthRegister">
                @csrf
                <div class="menu_inputs">
                    <div class="AuthRegister_input">
                        <input type="text" placeholder="Имя" id="nameCustomer" name="nameCustomer">                            
                    </div>
                    <div class="AuthRegister_input">
                        <input type="text" placeholder="Фамилия" name="sernameCustomer">
                    </div>
                    <div class="AuthRegister_input">
                        <input type="text" placeholder="Отчество" name="fatherName">
                    </div>
                </div>
                <div class="menu_buttons">
                    <div class="menu_buttons_RecoverLogin">
                        <div class="button_login">
                            <button type="submit" id="saveCustomer">
                                Готово 
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" method="post" id="keySMSLogin" style="display: none" class="AuthRegister">
                <div class="menu_inputs">
                    <div class="AuthRegister_input">
                        <input type="text" placeholder="СМС-КОД">
                    </div>
                </div>
                <div class="menu_buttons">
                    <div class="menu_buttons_RecoverLogin">
                        <div class="button_login">
                            <button type="button">
                                Отправить 
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection