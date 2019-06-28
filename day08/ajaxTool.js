var $ = {
    ajax:function(option) {
      var type = option.type || 'get';
      var url = option.url || location.href;
      var data = this.getpa(option.data) || '';
      var success = option.success;
    }
}