<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
      <div class="card-header">
        <h1>Добро пожаловать</h1>
      </div>
      <div class="card-body">
        <h5 class="card-title">Это welcome page веб приложения The Game</h5>
        <p class="card-text">Вы можете залогиниться и продожить игру или зарегистрироваться ниже.</p>
     </div>
    <div class="card-footer text-muted text-center">
        <a href="<?php echo URLROOT; ?>/account/login" class="btn btn-primary btn-block">Войти</a>
        <a href="<?php echo URLROOT; ?>/account/register" class="btn btn-primary btn-block">Зарегистрироваться</a>
     </div>       
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
