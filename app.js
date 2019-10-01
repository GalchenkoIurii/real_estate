const houses = [
    {title: 'First house', shortDescription: 'This is short description of First house', price: '50000', image: 'images/home_01.jpg'},
    {title: 'Second house', shortDescription: 'This is short description of Second house', price: '70000', image: 'images/home_02.jpg'},
    {title: 'Third house', shortDescription: 'This is short description of Third house', price: '80000', image: 'images/home_03.jpg'},
    {title: 'Fourth house', shortDescription: 'This is short description of Fourth house', price: '55000', image: 'images/home_04.jpg'},
    {title: 'Fifth house', shortDescription: 'This is short description of Fifth house', price: '30000', image: 'images/home_05.jpg'},
    {title: 'Sixth house', shortDescription: 'This is short description of Sixth house', price: '130000', image: 'images/home_06.jpg'}
]

new Vue({
    el: '#main',
    data: {
        houses: houses,
        house: houses[0],
        selectedItem: 0
    },
    methods: {
        selectHouse: function(index) {
            this.house = houses[index];
            this.selectedItem = index;
        }
    }
})