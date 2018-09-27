SELECT count(pj.ngo_id) from product as p join product_join as pj on p.p_id = pj.pr_id join quatation as qt on qt.qt_id = pj.qt_id join ngo_register as ng on ng.ngo_id = qt.qt_ngo_id where p.p_id = 2

SELECT count(pj.vol_id) from product as p join product_join as pj on p.p_id = pj.pr_id join quatation as qt on qt.qt_id = pj.qt_id join volunteer_register as vl on vl.vol_id = qt.qt_vol_id join ngo_register as ng on ng.ngo_id = vl.vol_conn_ngo where qt.qt_id = 1

SELECT count(pj.schl_id) as schl_qty from product as p join product_join as pj on p.p_id = pj.pr_id join quatation as qt on qt.qt_id = pj.qt_id join school_register as sh on sh.schl_id = qt.qt_school_id join volunteer_register as vl on sh.schl_volun = vl.vol_id join ngo_register as ng on sh.schl_ngo = ng.ngo_id where qt.qt_id = 1

SELECT count(pj.stud_id) as stud_qty from product as p join product_join as pj on p.p_id = pj.pr_id join quatation as qt on qt.qt_id = pj.qt_id join student_register as st on st.stud_id = pj.stud_id join school_register as sh on sh.schl_id = st.schl_name join volunteer_register as vl on sh.schl_volun = vl.vol_id join ngo_register as ng on sh.schl_ngo = ng.ngo_id where qt.qt_id = 1