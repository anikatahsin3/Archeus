<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    $(document).ready(function () {
        $(".add1").click(function (a) {
            console.log("working")
            a.preventDefault();
            $("#tskill").prepend(`
                <div class="row">
                    <div class="col"></div>
                        <label for="t_skill" class="form-label">Skill</label>
                        <input type="text" class="form-control form-control-sm" name='t_skill' id="t_skill" required>
                        <br>
                        <label for="des" class="form-label">Describe</label>
                        <textarea class="form-control" placeholder="Describe..." name='des' id="des"
                            style="height: 80px;"></textarea>
                        <br>
                        <label for="rp" class="form-label">Related Projects</label>
                        <input type="text" class="form-control form-control-sm" name='rp' id="rp" required>
                        <br>
                        <button type="button" class="btn btn-danger btn-lg remove1">Remove</button>
                    </div>
                    <br>
                <div class="col"></div>
                <br>
                </div>
                <br>`);
        });

        $(document).on('click', '.remove1', function (a) {
            a.preventDefault();
            let delete1 = $(this).parent();
            $(delete1).remove();
        });
    });

    $(document).ready(function () {
        $(".add2").click(function (a) {
            a.preventDefault();
            $("#sskill").prepend(`
            <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="s_skill" class="form-label">Skill</label>
                        <input type="text" class="form-control form-control-sm" name='s_skill' id="s_skill" required>
                        <br>
                        <button type="button" class="btn btn-danger btn-lg remove2">Remove</button>
                    </div>
                    <br>
                    <div class="col"></div>
                    <br>
                </div>
                <br>`);
        });

        $(document).on('click', '.remove2', function (a) {
            a.preventDefault();
            let delete1 = $(this).parent();
            $(delete1).remove();
        });
    });



    $(document).ready(function () {
        $(".add3").click(function (a) {
            a.preventDefault();
            $("#v_exp").prepend(`
            <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="e_name" class="form-label">Activity Name</label>
                        <input type="text" class="form-control form-control-sm" name='e_name' id="e_name" required>
                        <br>
                        <label for="role" class="form-label">Description</label>
                        <input type="text" class="form-control form-control-sm" name='role' id="role" required>
                        <br>
                        <label for="cont" class="form-label">Link</label>
                        <textarea class="form-control" placeholder="Details..." name='cont' id="cont"
                            style="height: 80px;"></textarea>
                        <br>
                        <button type="button" class="btn btn-danger btn-lg remove3">Remove</button>
                    </div>
                    <br>
                    <div class="col"></div>
                    <br>
                </div>
                <br>`);
        });

        $(document).on('click', '.remove3', function (a) {
            a.preventDefault();
            let delete1 = $(this).parent();
            $(delete1).remove();
        });
    });

    $(document).ready(function () {
        $(".add4").click(function (a) {
            a.preventDefault();
            $("#p_projects").prepend(`
            <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <label for="p_name" class="form-label">Project Name</label>
                        <input type="text" class="form-control form-control-sm" name='p_name' id="p_name" required>
                        <br>
                        <label for="ver" class="form-label">Verified By</label>
                        <input type="text" class="form-control form-control-sm" name='p_ver' id="ver" required>
                        <br>
                        <label for="p_des" class="form-label">Project Description</label>
                        <textarea class="form-control" placeholder="Details..." name='p_des' id="p_des"
                            style="height: 80px;"></textarea>
                        <br>
                        <button type="button" class="btn btn-danger btn-lg remove4">Remove</button>
                    </div>
                    <br>
                    <div class="col"></div>
                    <br>
                </div>
                <br>`);
        });

        $(document).on('click', '.remove4', function (a) {
            a.preventDefault();
            let delete1 = $(this).parent();
            $(delete1).remove();
        });
    });



    $(document).ready(function () {
            $(".add5").click(function (a) {
                a.preventDefault();
                $("#pub").prepend(`
                <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control form-control-sm" name='title' id="title" required>
                            <br>
                            <label for="year_p" class="form-label">Year Published</label>
                            <input type="number" class="form-control form-control-sm" name='year_p' id="year_p" required>
                            <br>
                            <label for="ver" class="form-label">Verified By</label>
                            <input type="text" class="form-control form-control-sm" name='pu_ver' id="ver" required>
                            <br>
                            <button type="button" class="btn btn-danger btn-lg remove5">Remove</button>
                        </div>
                        <br>
                        <div class="col"></div>
                        <br>
                    </div>
                    <br>`);
            });

            $(document).on('click', '.remove5', function (a) {
                a.preventDefault();
                let delete1 = $(this).parent();
                $(delete1).remove();
            });
        });
