$(document).ready(function () {
    // (async () => {
    $('#btn').click(function () {
        getPerson()
    })
    function getPerson() {
        var name = $('#name').val();
        console.log('Name inserted ' + name);
        $.ajax({
            url: 'action.php',
            method: 'POST' , //supposed to be get but change it to post so it fit to the second call, the form action which sends POST
            data: { name: name },
            // async: true,
            success: function (res) {
                console.log('Success ', res)
            }

        });
    }
    // })().then()
})

//writing it with async await
// async function getPerson() {
//     var name = $('#my_name').val();
//     console.log('Name: ' + name);
  
//     try {
//       const response = await $.ajax({
//         url: 'action.php',
//         method: 'GET',
//         data: { name: name }
//       });
//       console.log(response);
//     } catch (error) {
//       console.error(error);
//     }
//   }