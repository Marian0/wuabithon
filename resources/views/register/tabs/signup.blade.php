<div class="tab-pane" id="<?= $tab ?>">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="info-text"> Let's start with the basic details.</h4>
        </div>
        <div class="col-sm-6">
            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
                <div class="form-group label-floating">
                    <label class="control-label">Your Email</label>
                    <input name="name" type="text" class="form-control">
                </div>
            </div>

            <div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
                <div class="form-group label-floating">
                    <label class="control-label">Your Password</label>
                    <input name="name2" type="password" class="form-control">
                </div>
            </div>

        </div>
        <div class="col-sm-6">
            <div class="form-group label-floating">
                <label class="control-label">Country</label>
                <select class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Afghanistan"> Afghanistan</option>
                    <option value="Albania"> Albania</option>
                    <option value="Algeria"> Algeria</option>
                    <option value="American Samoa"> American Samoa</option>
                    <option value="Andorra"> Andorra</option>
                    <option value="Angola"> Angola</option>
                    <option value="Anguilla"> Anguilla</option>
                    <option value="Antarctica"> Antarctica</option>
                    <option value="...">...</option>
                </select>
            </div>
            <div class="form-group label-floating">
                <label class="control-label">Daily Budget</label>
                <select class="form-control">
                    <option disabled="" selected=""></option>
                    <option value="Afghanistan"> < $100</option>
                    <option value="Albania"> $100 - $499</option>
                    <option value="Algeria"> $499 - $999</option>
                    <option value="American Samoa"> $999+</option>
                </select>
            </div>
        </div>
    </div>
</div>