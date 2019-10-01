const houses = [
    {title: 'First house', shortDescription: 'This is short description of First house', description: 'This is full description of First house. City, district, square of house, e.t.c.', price: '50000', image: 'images/home_01.jpg'},
    {title: 'Second house', shortDescription: 'This is short description of Second house', description: 'This is full description of Second house. City, district, square of house, e.t.c.', price: '70000', image: 'images/home_02.jpg'},
    {title: 'Third house', shortDescription: 'This is short description of Third house', description: 'This is full description of Third house. City, district, square of house, e.t.c.', price: '80000', image: 'images/home_03.jpg'},
    {title: 'Fourth house', shortDescription: 'This is short description of Fourth house', description: 'This is full description of Fourth house. City, district, square of house, e.t.c.', price: '55000', image: 'images/home_04.jpg'},
    {title: 'Fifth house', shortDescription: 'This is short description of Fifth house', description: 'This is full description of Fifth house. City, district, square of house, e.t.c.', price: '30000', image: 'images/home_05.jpg'},
    {title: 'Sixth house', shortDescription: 'This is short description of Sixth house', description: 'This is full description of Sixth house. City, district, square of house, e.t.c.', price: '130000', image: 'images/home_06.jpg'}
]

new Vue({
    el: '#main',
    data: {
        houses: houses,
        house: houses[0],
        selectedItem: 0,
        moreInfo: false
    },
    methods: {
        selectHouse: function(index) {
            this.house = houses[index];
            this.selectedItem = index;
        }
    },
    computed: {
        toggleDescription: function() {
            return this.moreInfo ? 'Свернуть' : 'Подробнее';
        }
    }
})