<template>
    <section >
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
</template>

<script>
    import {dbData} from '../data.js';
    import axios from 'axios';
    export default {
        name: "main",
        data:()=>{return {
            houses: [],
            selectedItem: 0,
            moreInfo: false,
            search: '',
            info: null
        }},
        mounted() {
            console.log(dbData);
            axios
                .get('localhost/search_data.php')
                .then(response => (this.info = response));
        },
        methods: {
            selectHouse: function(index) {
                this.house = houses[index];
                this.selectedItem = index;
            }
        },
        computed: {
            house(){
                return this.houses.length!=0?houses[0]:''
            },
            toggleDescription() {
                return this.moreInfo ? 'Свернуть' : 'Подробнее';
            },
            filteredItems() {
                return this.houses.filter((item) => {
                    return item.title.indexOf(this.search) > -1 || item.description.indexOf(this.search) > -1;
                });
            }

        }
    }
</script>

<style scoped>

</style>