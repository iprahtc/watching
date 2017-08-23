<!-- Modal Structure -->
<div class="modal auth" id="modal1" style="">
    <div class="container">
        <div class="row">
            <form class="col s12" action="">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Пароль</label>
                    </div>
                </div>
                <div>
                    <input class="waves-effect waves-light btn" type="submit" value="Войти">
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.modal').modal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                inDuration: 300, // Transition in duration
                outDuration: 200, // Transition out duration
                startingTop: '4%', // Starting top style attribute
                endingTop: '10%' // Ending top style attribute
            }
        );
    });
</script>