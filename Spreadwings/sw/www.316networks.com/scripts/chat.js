document.write('<table>\n');
 
 document.write('<tr>\n');
 
 document.write('<td valign="middle" style="background-color: black; text-align: center; font-weight: bold; color: white; font-family: Verdana, Arial,  Helvetica, sans-serif; font-size: 12px; height: ' + livechatHeight + 'px; width: ' + livechatWidth + 'px;" id="chatHolder">\n');
 
 
 function loadChat(username) {
 
 embedCode = document.createElement("DIV"); embedCode.innerHTML = '<EMBED src="http://livechat.316networks.com/lite.swf?init_host=livechat.316networks.com&init_room=' + chatRoom + '&init_user=' + username + '&init_host_s=livechat.316networks.com&init_port_s=&init_host_h=livechat.316networks.com&init_port_h=&init_skin=' + borderColor + '" HEIGHT="' + livechatHeight + '" WIDTH="' + livechatWidth + '" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" TYPE="application/x-shockwave-flash" menu="false" quality="high" />'; 
 document.getElementById("chatHolder").appendChild(embedCode);
 document.getElementById("loginDiv").style.display = 'none'; void(0);
 
 }
 
 
 document.write('<div id="loginDiv">\n');
 
 document.write('<br>\n');
 document.write('Select a username to join the<br>' + chatRoomname + ':<br /><br />\n\n');
 
 document.write('<form method="" onSubmit="return false;"><input name="username" id="username" size="26" type="text" <br/><br/> <input type="submit" value="Join Chat" onClick="javascript:loadChat(document.getElementById(\'username\').value);"></form>\n\n');
 
document.write('</div></td></tr></table>');
