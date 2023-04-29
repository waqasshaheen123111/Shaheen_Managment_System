@push('push-script')
<script>
    function loadfile(_this){
      _this.parent().attr('id','style-img')
      
      alert(_this.attr('id'))
      var id=_this.attr('id');
      alert(id)
    
      $("#teacher_id").val(id)
      alert($("#teacher_id").val()) 
     
  }
  
  alert('Hello')
</script>
@endpush