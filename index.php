<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real Estate Agency | Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-3">
                    Logo
                </div>
                <div class="col-sm-6">
                    Menu
                </div>
                <div class="col-sm-3">
                    Socials
                </div>
            </div>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Поиск недвижимости</h2>
                    <form>
                        <div class="form-group">
                            <label for="inputType">Тип</label>
                            <select id="inputType" class="form-control">
                                <option selected>Дом</option>
                                <option>Квартира</option>
                                <option>Офис</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Название</label>
                            <input
                                    type="text"
                                    class="form-control"
                                    id="inputName"
                                    placeholder="Введите название объекта или район"
                                    v-model="search"
                            >
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Город</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDistrict">Район</label>
                                <select id="inputDistrict" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Найти</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h2>Выбрать из списка</h2>
                    <ul class="list-group">
                        <li
                            v-for="(house, index) in filteredItems"
                            v-on:click="selectHouse(index)"
                            v-bind:class="{'active': selectedItem === index}"
                            class="list-group-item list-group-item-action pointer">
                            {{house.title}} - {{house.price}} $
                        </li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="container">
            <h2>{{house.title}}</h2>
            <div class="row">
                <div class="col-sm-10">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-sm-4">
                                <img v-bind:src="house.image" class="card-img" alt="House">
                            </div>
                            <div class="col-sm-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{house.title}}</h5>
                                    <p class="card-text">{{house.shortDescription}}</p>
                                    <p class="card-text"
                                        v-if="moreInfo">{{house.description}}</p>
                                    <p class="card-text">{{house.price}} $</p>
                                    <a href="#" class="btn btn-primary"
                                        v-on:click="moreInfo = !moreInfo">
                                        {{toggleDescription}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="container">
            <h2>Все предложения</h2>
            <div class="row">
                <div
                        v-for="house in houses"
                        class="col-sm-4">
                    <div class="card text-center mb-5">
                        <img v-bind:src="house.image" class="card-img-top" alt="House">
                        <div class="card-body">
                            <h5 class="card-title">{{house.title}}</h5>
                            <p class="card-text">{{house.shortDescription}}</p>
                            <p class="card-text">{{house.price}} $</p>
                            <a href="#" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end main -->
    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="app.js"></script>
</body>
</html>