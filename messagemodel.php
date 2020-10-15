<div id="message-modal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Thanx</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if(isset($_REQUEST['registernow'])){
                    $s_msg='<div class="alert alert-success mt-2 text-uppercase" role="alert" >login failed</div>';
                }
                if (isset($s_msg)) {
                    echo $s_msg;
                } ?>
            </div>
        </div>
    </div>
</div>