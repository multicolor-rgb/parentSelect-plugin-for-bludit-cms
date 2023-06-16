<style>
  .select2-hidden-accessible {
    all: unset;
    border: solid 1px #ddd !important;
    clip: unset !important;
    -webkit-clip-path: unset !important;
    clip-path: unset !important;
    height: 40px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: unset !important;
    width: 100% !important;
    white-space: nowrap !important;
    padding: 10px !important;
    box-sizing: border-box !important;
  }

  ..select2-jsparent-container {
    display: none !important;
  }

  span.selection {
    display: none !important;
  }


  #parentData input {
    width: 100%;
    height: 20px;
    background: #fff;
  }
</style>


<?php

$p = new Pages();

global $page;






$dbs = '<datalist id="parentData" onchange="resetIfInvalid(this)"><option value="">Without parent</option>';

foreach ($p->db as $key => $value) {

  if ($this->getValue('titleshow') == 'name-structure') {
    $dbs .= '<option value="' . $key . '">' . $value['title'] . ' (' . $key . ')</option>';
  } elseif ($this->getValue('titleshow') == 'structure-name') {
    $dbs .= '<option value="' . $key . '">(' . $key . ') ' . $value['title'] . '</option>';
  } else {
    $dbs .= '<option value="' . $key . '">' . $value['title'] . '</option>';
  };
  
};

$dbs .= '</datalist>';; ?>

<script>
  function resetIfInvalid(el) {
    //just for beeing sure that nothing is done if no value selected
    if (el.value == "")
      return;
    var options = el.list.options;
    for (var i = 0; i < options.length; i++) {
      if (el.value == options[i].value)
        //option matches: work is done
        return;
    }
    //no match was found: reset the value
    el.value = "";
  }


  window.addEventListener('load', () => {





    if (document.querySelector('#jseditorSidebar') !== null) {


      const dbs = `<?php echo $dbs; ?>`


      if (window.location.href.includes('/edit-content/')) {
        var slug = window.location.href.replace(DOMAIN_ADMIN + 'edit-content/', '');
      } else {
        var slug = '';
      }


      document.querySelector('#jsparent').insertAdjacentHTML('beforebegin', `<p>structure parent page: ${slug}</p>`);

      document.querySelector('#jsparent').classList.add('custom-select');
      document.querySelector('#jsparent').setAttribute('list', 'parentData');
      document.querySelector('#jsparent').setAttribute('autocomplete', 'off');
      document.querySelector('#jsparent').outerHTML = document.querySelector('#jsparent').innerHTML = document.querySelector('#jsparent').outerHTML.replace(/(<select)/igm, '<input').replace(/<\/select>/igm, '');
      document.querySelector('#jsparent').outerHTML = document.querySelector('#jsparent').outerHTML;

      if (document.querySelector('#select2-jsparent-container')) {
        document.querySelector('#jsparent').value = document.querySelector('#select2-jsparent-container').getAttribute('title');
      } else {
        document.querySelector('#jsparent').value = '';
      }

      document.querySelector('#jsparent').nextElementSibling.remove();
      document.querySelector('#jstemplate').insertAdjacentHTML('afterend', dbs);





    };


  })
</script>