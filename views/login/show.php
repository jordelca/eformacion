


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    <div class="panel-body">
                        <form role="form" action="/<?= $_SESSION['lang']?>/login/login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="<?=$this->language->getPhrase('key_username',$_SESSION['lang']);?>" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="<?=$this->language->getPhrase('key_password',$_SESSION['lang']);?>" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"><?=$this->language->getPhrase("key_remember",$_SESSION['lang']);?>
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="<?=$this->language->getPhrase("key_login",$_SESSION['lang']);?>">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
