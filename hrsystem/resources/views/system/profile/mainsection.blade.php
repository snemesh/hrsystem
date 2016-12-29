<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">User Profile</div>
                    <div class="panel-body">
                        <div class="col-md-3 col-md-push-1">
                            <div class="thumbnail">
                                <h3 align="center">{{$user->name}}</h3>
                                <img src={{asset('img/un4.png')}} alt={{asset('img/un4.png')}} class="img-thumbnail">
                                <div class="caption">
                                    <div align="center">
                                        <p><a href="#" class="btn btn-success" role="button">Edit photo</a>
                                            <a href="#" class="btn btn-warning" role="button">Delete photo</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-md-4">User name:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="disabledInput" value={{$user->name}} title="username">
                                        <span class="help-block">It was defined like a Username when you registated</span>
                                    </div>
                                    <label class="control-label col-md-4">User e-mail:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value={{$user->email}} title="email">
                                        <span class="help-block">You pointed this email in registation form</span>
                                    </div>
                                    <label class="control-label col-md-4">Registered:</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" value={{$user->created_at}} title="Data of creation" disabled>
                                        <span class="help-block">It's date of user registation</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
