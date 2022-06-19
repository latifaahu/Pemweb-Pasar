@if (session('status'))
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 mx-8 dark:bg-white">
        <span class="block sm:inline">{{ session('status') }}</span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
            <span>×</span>
        </button>
    </div>
@endif



<script>
  function closeAlert(event){
    let element = event.target;
    while(element.nodeName !== "BUTTON"){
      element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
  }
</script>
