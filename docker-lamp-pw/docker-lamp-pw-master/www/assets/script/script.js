$(document).ready(()=>{
    $('main').load('pages/home.html')
    $('#home').addClass('active')

    function removeClassMenu(){
        $('#home').removeClass('active')
        $('#dropMasculino').removeClass('active')
        $('#dropFeminino').removeClass('active')
        $('#dropInfantil').removeClass('active')
        $('#produtos').removeClass('active')
        $('#sobreNos').removeClass('active')
    }

    $('#home').click(()=>{
        removeClassMenu()
        $('#home').addClass('active')
    })

    $('#dropMasculino').click(()=>{
        removeClassMenu()
        $('#dropMasculino').addClass('active')
        $('#produtos').addClass('active')     
    })

    $('#dropFeminino').click(()=>{
        removeClassMenu()
        $('#dropFeminino').addClass('active')
        $('#produtos').addClass('active')        
    })

    $('#dropInfantil').click(()=>{
        removeClassMenu()
        $('#dropInfantil').addClass('active')
        $('#produtos').addClass('active')        
    })

    $('#sobreNos').click(()=>{
        removeClassMenu()
        $('#sobreNos').addClass('active')        
    })
    $('#logo').click(()=>{
        removeClassMenu()
        $('#home').addClass('active')
    })
})