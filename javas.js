<script>
        $(function(){
            $('#currency').maskMoney({
              prefix:'R$ ',
              allowNegative: true,
              thousands:'.', decimal:',',
              affixesStay: true})
        })
</script>