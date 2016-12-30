<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="panel panel-default">

                <div class="panel-body">

                                <div class="col-md-3">
                                    <div class="thumbnail">
                                            <h4 align="center">{{$user->name}}</h4>
                                        <img src={!! (null!==Session::get('imagename')) ? asset('thumbnail_images/'.Session::get('imagename')) : asset('img/un4.png') !!} alt='' class="img-thumbnail">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            {!! Form::open(['route' => ['uploading','userid'=>$user->id],'files' => true]) !!}
                                            <p><input class='form-control' type="file" name="photo" multiple accept="image/*,image/jpeg"></p>
                                            <button type="submit" class="btn btn-primary col-md-12">Upload Image</button>
                                            {!! Form::token() . Form::close() !!}
                                        </div>
                                    </div>
                                </div>


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




                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading"><h3 class="panel-title" align="center">User Profile</h3></div>
                                            <div class="panel-body">

                                                {!! Form::open(['route' => ['saveuserdata','userid'=>$user->id],'files' => true]) !!}
                                                <div class="col-md-3">
                                                    <label class="control-label">Login in Jira:</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input name='salary' type="text" class="form-control" id="disabledInput"
                                                           value={{ isset($user->jiralogin) ? $user->jiralogin : $tmpmess }}>
                                                    <span class="help-block">You are useng this login in Jira</span>
                                                </div>
                                                <button type="submit" class="btn btn-primary col-md-3">Save</button>

                                                {!! Form::token() . Form::close() !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>

                </div>
            </div>
        </div>
    </div>
</div>

