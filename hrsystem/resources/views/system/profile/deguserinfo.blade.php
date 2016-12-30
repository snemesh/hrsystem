<div class="col-md-9">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading"><h1 class="panel-title" align="center">Default user information</h1></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">User name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="disabledInput" value={{$user->name}}>
                                <span class="help-block">It's a registarion Username</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">User e-mail:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="disabledInput" value={{$user->email}}>
                                <span class="help-block">You pointed this email in registation form</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">Registered:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="disabledInput" value={{$user->created_at}} disabled>
                                <span class="help-block">It's date of user registation</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">Hired:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="disabledInput" value={{$user->hired}} disabled>
                                <span class="help-block">It's date of updated userinfo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>