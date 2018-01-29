<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>

    <!-- CSS и JavaScript -->
</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        <!-- Содержимое Navbar -->
    </nav>
</div>
111111111


    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @if (count($errors) > 0)
        <!-- Список ошибок формы -->
            <div class="alert alert-danger">
                <strong>Упс! Что-то пошло не так!</strong>

                <br><br>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

      @foreach($rolle as $values)

               <?php echo $values->id.' '.$values->name; ?>
                     <!-- {{ $values->id.' '.$values->name }} -->

      @endforeach
    <!-- Форма новой задачи -->
        <form action="{{ url('rolle') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="rolle" class="col-sm-3 control-label">Задача</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="rolle-name" class="form-control">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить задачу
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Текущие задачи -->

</body>
</html>