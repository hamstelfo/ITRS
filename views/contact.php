
      <div class="row marketing">
        <div class="col-lg-12">
          <form id="contact">
          	<div class="form-group">
					    <label for="exampleInputEmail1"><?=$this->lng->i18n('form.label.name');?></label>
					    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="<?=$this->lng->i18n('form.placeholder.name');?>">
					    <small id="namelHelp" class="form-text text-muted"><?=$this->lng->i18n('form.subtext.name');?></small>
					  </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1"><?=$this->lng->i18n('form.label.email');?></label>
					    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="<?=$this->lng->i18n('form.placeholder.email');?>">
					    <small id="emailHelp" class="form-text text-muted"><?=$this->lng->i18n('form.subtext.email');?></small>
					  </div>
					  <div class="form-group">
					    <label for="exampleTextarea"><?=$this->lng->i18n('form.label.subject');?></label>
					    <textarea class="form-control" id="subject" rows="3" placeholder="<?=$this->lng->i18n('form.placeholder.subject');?>"></textarea>
					    <small id="emailHelp" class="form-text text-muted"><?=$this->lng->i18n('form.subtext.subject');?></small>
					  </div>
					  <div class="form-group">
					    <label for="exampleTextarea"><?=$this->lng->i18n('form.label.comment');?></label>
					    <textarea class="form-control" id="comment" rows="3" placeholder="<?=$this->lng->i18n('form.placeholder.comment');?>"></textarea>
					    <small id="emailHelp" class="form-text text-muted"><?=$this->lng->i18n('form.subtext.comment');?></small>
					  </div>
					  <button type="button" onclick="if (!validation('contact')){return false;}else{alert('Validated but send feature is pending to implement!');}" class="btn btn-primary"><?=$this->lng->i18n('form.action.send');?></button>
					</form>
        </div>
      </div>
