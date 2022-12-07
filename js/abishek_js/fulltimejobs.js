var clz_all = document.getElementsByClassName("all");
var clz_gd = document.getElementsByClassName("gd");
var clz_dm = document.getElementsByClassName("dm");
var clz_wt = document.getElementsByClassName("wt");
var clz_va = document.getElementsByClassName("va");
var clz_ma = document.getElementsByClassName("ma");
var clz_pt = document.getElementsByClassName("pt");
var clz_ds = document.getElementsByClassName("ds");

var cat_list = document.getElementsByClassName("category-tital");







function filter(x) {
    if (x == 1) {
        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "block";
        }
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[0].classList.add('active');

    }

    else if (x == 2) {
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[1].classList.add('active');

        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "none";
        }

        for (var i = 0; i < clz_all.length; i++) {
            clz_gd[i].style.display = "block";
        }

    }
    else if (x == 3) {
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[2].classList.add('active');

        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "none";

        }
        for (var i = 0; i < clz_all.length; i++) {
            clz_dm[i].style.display = "block";
        }
    }
    else if (x == 4) {
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[3].classList.add('active');

        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "none";

        }
        for (var i = 0; i < clz_all.length; i++) {
            clz_wt[i].style.display = "block";
        }
    }
    else if (x == 5) {
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[4].classList.add('active');

        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "none";

        }
        for (var i = 0; i < clz_all.length; i++) {
            clz_va[i].style.display = "block";
        }
    }
    else if (x == 6) {
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[5].classList.add('active');

        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "none";

        }
        for (var i = 0; i < clz_all.length; i++) {
            clz_ma[i].style.display = "block";
        }
    }
    else if (x == 7) {
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[6].classList.add('active');

        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "none";

        }
        for (var i = 0; i < clz_all.length; i++) {
            clz_pt[i].style.display = "block";
        }
    }
    else if (x == 8) {
        for (var i = 0; i < cat_list.length; i++) {
            cat_list[i].classList.remove('active');
        }
        cat_list[7].classList.add('active');

        for (var i = 0; i < clz_all.length; i++) {
            clz_all[i].style.display = "none";

        }
        for (var i = 0; i < clz_all.length; i++) {
            clz_ds[i].style.display = "block";
        }
    }


    // else if (x = 3) {
    //     for (var i = 0; i < clz_all.length; i++) {
    //         clz_all[i].style.display = "none";

    //     }

    //     for (var i = 0; i < clz_ds.length; i++) {
    //         clz_ds[i].style.display = "block";
    //     }
    // }
    // else if (x = 4) {
    //     for (var i = 0; i < clz_all.length; i++) {
    //         clz_all[i].style.display = "none";

    //     }

    //     for (var i = 0; i < clz_gd.length; i++) {
    //         clz_gd[i].style.display = "block";
    //     }
    // }

    // else if (x = 5) {
    //     for (var i = 0; i < clz_all.length; i++) {
    //         clz_all[i].style.display = "none";

    //     }

    //     for (var i = 0; i < clz_ma.length; i++) {
    //         clz_ma[i].style.display = "block";
    //     }
    // }
    // else if (x = 6) {
    //     for (var i = 0; i < clz_all.length; i++) {
    //         clz_all[i].style.display = "none";

    //     }

    //     for (var i = 0; i < clz_pt.length; i++) {
    //         clz_pt[i].style.display = "block";
    //     }
    // }

    // else if (x = 7) {
    //     for (var i = 0; i < clz_all.length; i++) {
    //         clz_all[i].style.display = "none";

    //     }

    //     for (var i = 0; i < clz_va.length; i++) {
    //         clz_va[i].style.display = "block";
    //     }
    // }

    // else if (x = 8) {
    //     for (var i = 0; i < clz_all.length; i++) {
    //         clz_all[i].style.display = "none";

    //     }

    //     for (var i = 0; i < clz_wt.length; i++) {
    //         clz_wt[i].style.display = "block";
    //     }
    // }


}
