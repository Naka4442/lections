let tasks = [
    {
        title : "Тестовая задача",
        done : false
    },
    {
        title : "Тестовая задача 2",
        done : false
    }
];
function renderTasks(){
    $(".tasks").html("");
    for(let i = 0; i < tasks.length; i++){
        $(`<div class="task">
            <p ${(tasks[i].done)?"class='done'":""}>${tasks[i].title}</p>
            <input type="checkbox" ${(tasks[i].done)?"checked": ""}>
        </div>`).appendTo(".tasks");
    }
    $(".task>input").on("click", function(){
        let i = $(this).parent().index();
        tasks[i].done = (!$(this).prop("checked"))?false:true;
        renderTasks();
    })
}
$(".add-task>button").on("click", function(){
    let title = $(".add-task>input").val();
    if(title.length > 3){
        tasks.push({
            title : title,
            done : false
        });
        renderTasks();
        $(".add-task>input").val("");
    }
});
renderTasks();