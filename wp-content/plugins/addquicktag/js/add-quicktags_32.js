jQuery(document).ready(function(a){if("undefined"!=typeof addquicktag_tags){var b=addquicktag_tags.buttons,c=document.getElementById("ed_toolbar");if("undefined"!=typeof b&&c)for(var d,e,f=0;f<b.length;f++){for("undefined"==typeof b[f].title&&(b[f].title=" "),"undefined"==typeof b[f].end&&(b[f].end=""),"undefined"==typeof b[f].access&&(b[f].access=""),e=edButtons.length,edButtons[e]=new edButton(b[f].text.toLowerCase(),b[f].text,b[f].start,b[f].end,b[f].access,b[f].title),d=c.lastChild;1!=d.nodeType;)d=d.previousSibling;d=d.cloneNode(!0),d.id="ed_"+e,d._idx=e,d.value=b[f].text,d.title=b[f].title,d.onclick=function(){return edInsertTag(edCanvas,this._idx),!1},c.appendChild(d)}}});