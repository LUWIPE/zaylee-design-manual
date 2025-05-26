@use(App\Enums\EstimateUnit)
<script>
    // Global variables that allow us to access them from JS.
    window.connecto = {

        // Form Validation errors from Laravel.
        errors: @json($errors->getMessages()),
        hasError(inputName) {
            return this.errors[inputName]?.length ?? 0 > 0;
        },

        // Old form values from Laravel.
        old: @json(old()),

        // ENUMs
        estimateUnit: @json(EstimateUnit::options()),
    };
</script>
