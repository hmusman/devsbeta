<div class='search-form-outer'>
    <form method='get' action='{{route("blogetc.search")}}' class='text-center'>
        <input type='text' name='s' placeholder='Search...' class='form-control' value='{{\Request::get("s")}}'>
        <button type='submit' style="position: absolute;top: 43px;right: 0px;padding: 0px 20px;" value='Search' class='btn btn-primary m-2'>
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<style>
    .btn-primary:hover{
        background: #1AA687 !important;
        box-shadow:none !important;
    }
</style>