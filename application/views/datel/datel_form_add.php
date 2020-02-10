<section class="content-header">
  <h1>
  Datel
    <small>Data Datel</small>
  </h1>
  <ol class="breadcrumb">       
    <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
    <li class="active">Datel</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="box">
      <div class="box-header">
        <h3 class="box-title">Tambah Datel</h3>
        <div class="pull-right">
            <a href="<?=site_url('Admin/getDatel')?>" class="btn btn-warning btn-flat">
                <i class="fa fa-undo"></i> Back 
            </a>
        </div>
      </div>
      <div class="box-body">
         <div class="row">
             <div class="col-md-4 col-md-offset-4">
                <?php //echo validation_errors() ?>
                <form action="" method="post"> 
                    <div class="form-group <?=form_error('namaDatel') ? 'has-error' : null ?>">
                        <label>Nama Datel *</label>
                        <input type="text" name="namaDatel" value="<?=set_value('namaDatel')?>" class="form-control">
                        <?=form_error('namaDatel')?>
                    </div>
                    <div class="form-group <?=form_error('keterangan') ? 'has-error' : null ?>">
                        <label>Keterangan</label>
                        <textarea style="resize:none" name="keterangan" class="form-control" rows="3" ><?=set_value('keterangan')?></textarea>
                        <?=form_error('keterangan')?>
                    </div>
                    <div class="form-group <?=form_error('witel') ? 'has-error' : null ?>">
                        <label>Witel *</label>
                        <select name="witel" class="form-control">
                            <option value="" selected="selected">- Pilih Witel -</option>
                            <?php foreach($row->result() as $key => $witel) {?>
                                <option value="<?=$witel->idWitel?>" <?=set_value('witel') == $witel->idWitel ? "selected" : null?>><?=$witel->namaWitel?>
                              </option>
                            <?php }?>
                        </select>
                        <?=form_error('witel')?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-flat">Reset</button>
                    </div>
                </form>
             </div>
         </div>
      </div>
  </div>

</section>