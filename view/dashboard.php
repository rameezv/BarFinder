
<div class="page-content">
    <div class="row">
        <div class="space-6"></div>
        <div class="col-sm-10 col-sm-offset-1">
            <div id="login-box" class="login-box visible widget-box no-border">
                <div class="widget-body">
                    <div class="widget-main">
                        <h4 class="header blue lighter bigger">
                            <i class="icon-coffee green"></i>
                            User Authenticated
                        </h4>
                        <div class="space-16"></div>
                        UID: {{uid}}
                        <br/>NAME: {{name}}
                        <br/>E-MAIL: {{email}}
                        <br/>
                        <a ng-click="logout();">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-content -->