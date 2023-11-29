<!-- In your view file (e.g., src/Template/YourController/login.ctp) -->

<style>
    body {
        background-color: #f4f4f4;
        font-family: 'Arial', sans-serif;
    }

    .login-container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
        text-align: center;
        color: #333;
    }

    <?= $this->Form->create(); ?>

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-submit {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        font-size: 18px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-submit:hover {
        background-color: #0056b3;
    }

    <?= $this->Form->end(); ?>
</style>

<div class="login-container">
    <h3>Login</h3>

    <?= $this->Form->create(); ?>

    <div class="form-group">
        <?= $this->Form->label('Username','Username', ['class' => 'form-label']); ?>
        <?= $this->Form->text('username', ['class' => 'form-input']); ?>
    </div>

    <div class="form-group">
        <?= $this->Form->label('Password','Password', ['class' => 'form-label']); ?>
        <?= $this->Form->password('password', ['class' => 'form-input']); ?>
    </div>

    <?= $this->Form->submit('Login', ['class' => 'form-submit']); ?>

    <?= $this->Form->end(); ?>
</div>
