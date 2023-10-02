let mixer = mixitup('.container', {
    selectors: {
        target: '.filter-card'
    },
    animation: {
        duration: 300
    }
});

const linkport = document.querySelectorAll('.port-item');
function activePort(){
    linkport.forEach(L=>L.classlist.remove('mixitup-control-active'))
    this.classlist.add('mixitup-control-active')
}
linkport.forEach(L=>L.addEventListener('click',activePort))