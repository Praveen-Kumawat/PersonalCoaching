let c = document.querySelectorAll('.course_list');
let courses_01 = document.getElementById('courses_01');
console.log(courses_01);
let class_list = (c.length);
let i=0;
c.forEach(e=>{
    e.addEventListener('click',function(){
       let id = e.getAttribute('data');
    //    console.log(ROOT);
       $.ajax({
            url:ROOT+"course/showCourses",
            method:"POST",
            data:{id:id},
            success:function(e)
            {
                console.log(e);
                // window.location.assign(ROOT+"course")
                $("#courses_01").html(e);
            }
        })
    })
})
