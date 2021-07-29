function evaluate(){
    const studentObj = {
        1 : {
            index: "9000018",
            score: "312"
        },
        2 : {
            index: "8976722",
            score: "401"
        },
        3 : {
            index: "9897222",
            score: "378"
        },
        4 : {
            index: "5682323",
            score: "290"
        }
    };
    
    //National
    for (let i = 0; i < 4; i++) {
        var out = document.getElementById('index');
        let p_1 = "";
        let p_2 = "";
        let p_3 = "";
        let p_4 = "";
        if(studentObj[1].score > 400){
            p_1 = studentObj[1].index;
        }
        if(studentObj[2].score > 400){
            p_2 = studentObj[2].index;
        }
        if(studentObj[3].score > 400){
            p_3 = studentObj[3].index;
        }
        if(studentObj[4].score > 400){
            p_4 = studentObj[3].index;
        }
        out.innerHTML = "<p>"+p_1+"</p>"
        +"<br>"+"<p>"+p_2+"</p>"
        +"<br>"+"<p>"+p_3+"</p>"
        +"<br>"+"<p>"+p_4+"</p>";
    }

    //Extra county
    for (let i = 0; i < 4; i++) {
        var outt = document.getElementById('indext');
        let t_1 = "";
        let t_2 = "";
        let t_3 = "";
        let t_4 = "";
        if(studentObj[1].score > 300 && studentObj[1].score < 400){
            t_1 = studentObj[1].index;
        }
        if(studentObj[2].score > 300 && studentObj[2].score < 400){
            t_2 = studentObj[2].index;
        }
        if(studentObj[3].score > 300 && studentObj[3].score < 400){
            t_3 = studentObj[3].index;
        }
        if(studentObj[4].score > 300 && studentObj[4].score < 400){
            t_4 = studentObj[3].index;
        }
        outt.innerHTML = "<p>"+t_1+"</p>"
        +"<br>"+"<p>"+t_2+"</p>"
        +"<br>"+"<p>"+t_3+"</p>"
        +"<br>"+"<p>"+t_4+"</p>";
    }

    //County
    for (let i = 0; i < 4; i++) {
        var outw = document.getElementById('indexw');
        let w_1 = "";
        let w_2 = "";
        let w_3 = "";
        let w_4 = "";
        if(studentObj[1].score > 200 && studentObj[1].score < 300){
            w_1 = studentObj[1].index;
        }
        if(studentObj[2].score > 200 && studentObj[2].score < 300){
            w_2 = studentObj[2].index;
        }
        if(studentObj[3].score > 200 && studentObj[3].score < 300){
            w_3 = studentObj[3].index;
        }
        if(studentObj[4].score > 200 && studentObj[4].score < 300){
            w_4 = studentObj[3].index;
        }
        outw.innerHTML = "<p>"+w_1+"</p>"
        +"<br>"+"<p>"+w_2+"</p>"
        +"<br>"+"<p>"+w_3+"</p>"
        +"<br>"+"<p>"+w_4+"</p>";
    }
}
evaluate();