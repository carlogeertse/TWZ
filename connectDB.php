<?php
$servername = "clowting.me";
$username = "nm_sac";
$password = '4^DpkmP@F%LY#jX^VH4CvA5_awGM#^%H&dsGBYWD*KB!*Hvp-5prA5-^H#x=HHUCfkUvr7mWhQwzAH$ZK*BXU+@89w#DtsQtDYunw5=Yc898PFFgznRKUr5ebQb_cnyDGB=HVYqQwD-K@bKq6Ee-BMdHJu%B2NB_JXYpGEQz7qGzJ#%X3w6xRbtJm7VZLP#A8PV?=t#nsL@aKLWMDgkgaDsF_5@@?q43Q3f@&g=wCBbqYaGqQf?mQBPYr%Fs8-BQr$EGgUuur8c*$a@jJ=xX8+ttS7WeQM8!#h3AAZALDFnynmzh^-Qe@@v^Pd=SAb6U*XCE+_-vJfVWY2E!nEdCq!G7z=XP-VWSvzUH^ens5K%w4U$$4%$y=_x?WLn6tgQZRLdZh6E=h4CmLvu&D%tm%+sNVsFy+PcW+jjT4%yRZ!ZS52a7FahWmW8Q4=$eXRWe*mweK@6LxbHbayPv+kFm#_hh!3u!?U^AdeBDQqUB+YjD3mt#^Hm$7mXd85@NeFC6=v7Ra9#EpSk!W??d+gh6PX_f*gcSkek_a7Z&T%HRLCja$Wu$8W+GLQ+Y5Z&%L%!2rfdK7uU6kpkTK3f*-anG9zyLEcHjJ-mPSvzr3F%F2&ZQcB*h-_EMAYj%x$?z8#eXX+QUQwR@Yj3Y@Yj#V^*M^N4u*K2+Xcus=3K4X?Bf2hY?D%GwUGquX7NDyjpK^T!#96TGqb7YKkpAjmw-WQc2tum*Y3PfhVP*AwV&3r_K$amzhWStqru$d%P*XqRkhXCh&tfW@YXeavg-uRK=Kp7!t+jB?Wc^Hb&PkM#B78an3sjUnVujGDR_TqPnb$APN@67#QE?LEGz56L&NVu+N-jptrSXHB8KdqV_ntXtSR-tJ%4?52m!xHPTX=H8Gx$tQTHZh^Jw*!!c5fW+LZmUP7+TQZqfUe-2UYzR&$WWVbSjXBM&FBTnY+bfZf7brjyV3@MGQFJNTz?b?TDRUQ2twj-*yZAbqwmd*F+4b-SQAZaDmMVVqdu$+YbJ8?ywhk^LQX7$%37%5j?^+E_hV-g$yR9xUmxdhLkqVrrqFQjh57Dx+%b&3$znH&4fa3@thcXnJ87%ecP3HvYaXPNBwRNe#BpejFWkVDCSEK?bBW#cte#hPk#C+QAJ9#G#e**d9Sy4&bZ$svwhb+Nkgj+7da+eYNf#!@LuWQ5VvYWV8u2yM@%jUfmsgD_Qm#UM9$35wGtH8N3j#C$WusPcsBYba68*8xqYq$b@%xcV#Pj%WhP#z9N+-HAh_4P^%G*QpvvL-UK&X9qF7?W=4fsPRh*ehA8kWx74vEQgpcKr2hKtV%T%GU6_r%BS4%myeKNm+rdsd%sEJKNd96^&2!$BR*Mh6xb47dve@8E27MjRaNWV^!*ytqdqQwfsT8Tr*kgKckTLEJYQ=GX8vSZU9_f9SZGRXWu%5Tfh3Rna%34YYaNx?TGwn2FGX*BCU43zrcLV!fHuevW@5v@ySn_8D#xDgeCsc!GZX4R*wL5VT?%&&D64GE%^#fYGdPnDEEYg3S!4pNV5SkuNtTwz@DFDNqWZ+pFbN4wBUQJrWdxQKvAxtKss^?v4gyBcSJ37-J7rXc!A%U#+2wAjQ5jtKU=%x2Yqk2vsNn*8y-fTx&+c2qRhnx8!5GqgakK%AF*n=aJB-s-au-WKHzZL#&g&AT@M@5wrBbjKsn!jwy@gRcGkF!cHcZ*dNxTdbB8F448?$8wCF+$k4xxmAad7XEeG$9H^Z-Tb$Zvhh4zN@4La2HDCpWR&6_RFmU73Wg?PH?FUe=M6#Adn7a%AhUAAXW3hK^*CAJ8^U?@nMHqed5q%s#n^sEpd%3#STLA6nSg&TMD2NEx%R325WX_*MmuU#a^+ayU*nDmKpLtKWr#9D2#c-uGA9p^#DUXtREahF=93p&GaUNf4bNT!wuxGwE5TC6gAsd5u_BAw*eUZ=VMp3r?uztk$kJA5K^uD4$?gJ+SLzmCF-m7@TMpXCC#V+bKJxNf6Vp&*3$&NHHq#2P*4=J&w_LL+_aHNZG9?=B@4&NSF&4u!49rK7BpVhnk2UGWZ4Eue';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>