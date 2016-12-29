<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title" align="center">User Profile</h3></div>
                <div class="panel-body">

                                <div class="col-md-3">
                                    <div class="thumbnail">
                                            <h4 align="center">{{$user->name}}</h4>
                                        <img src={{asset('img/un4.png')}} alt={{asset('img/un4.png')}} class="img-thumbnail">
                                        <div class="caption">
                                            <div align="center">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel-heading"><h3 class="panel-title">Load user photo</h3></div>
                                                        <div class="panel-body">
                                                            <form action="/" method="post" enctype="multipart/form-data">
                                                                <input name="img" type="file" class="form-control-static">
                                                                <button type="submit" class="btn btn-primary col-md-12">Upload</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">User name:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="disabledInput" value={{$user->name}}>
                                                    <span class="help-block">It was defined like a Username when you registated</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">User e-mail:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="disabledInput" value={{$user->email}}>
                                                    <span class="help-block">You pointed this email in registation form</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Registered:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="disabledInput" value={{$user->created_at}} disabled>
                                                    <span class="help-block">It's date of user registation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                </div>
            </div>
        </div>
    </div>
</div>

