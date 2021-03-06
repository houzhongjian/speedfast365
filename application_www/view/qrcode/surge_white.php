<?php 
$host = $this->host;
$port = $this->port;
$passwd = $this->passwd;
?>
[General]
// warning, notify, info, verbose
#loglevel = notify
loglevel = warning
bypass-system = true
skip-proxy = 192.168.0.0/16, 10.0.0.0/8, 127.0.0.0/8, 172.16.0.0/12, localhost, *.local
bypass-tun = 192.168.0.0/16, 0.0.0.0/8, 1.0.0.0/9, 1.160.0.0/11, 1.192.0.0/11, 10.0.0.0/8, 14.0.0.0/11, 14.96.0.0/11, 14.128.0.0/11, 14.192.0.0/11, 27.0.0.0/10, 27.96.0.0/11, 27.128.0.0/9, 36.0.0.0/10, 36.96.0.0/11, 36.128.0.0/9, 39.0.0.0/11, 39.64.0.0/10, 39.128.0.0/10, 42.0.0.0/8, 43.224.0.0/11, 45.64.0.0/10, 47.64.0.0/10, 49.0.0.0/9, 49.128.0.0/11, 49.192.0.0/10, 54.192.0.0/11, 58.0.0.0/9, 58.128.0.0/11, 58.192.0.0/10, 59.32.0.0/11, 59.64.0.0/10, 59.128.0.0/9, 60.0.0.0/10, 60.160.0.0/11, 60.192.0.0/10, 61.0.0.0/10, 61.64.0.0/11, 61.128.0.0/10, 61.224.0.0/11, 100.64.0.0/10, 101.0.0.0/9, 101.128.0.0/11, 101.192.0.0/10, 103.0.0.0/10, 103.192.0.0/10, 106.0.0.0/9, 106.224.0.0/11, 110.0.0.0/7, 112.0.0.0/9, 112.128.0.0/11, 112.192.0.0/10, 113.0.0.0/9, 113.128.0.0/11, 113.192.0.0/10, 114.0.0.0/9, 114.128.0.0/11, 114.192.0.0/10, 115.0.0.0/8, 116.0.0.0/8, 117.0.0.0/9, 117.128.0.0/10, 118.0.0.0/11, 118.64.0.0/10, 118.128.0.0/9, 119.0.0.0/9, 119.128.0.0/10, 119.224.0.0/11, 120.0.0.0/10, 120.64.0.0/11, 120.128.0.0/11, 120.192.0.0/10, 121.0.0.0/9, 121.192.0.0/10, 122.0.0.0/7, 124.0.0.0/8, 125.0.0.0/9, 125.160.0.0/11, 125.192.0.0/10, 127.0.0.0/8, 139.0.0.0/11, 139.128.0.0/9, 140.64.0.0/11, 140.128.0.0/11, 140.192.0.0/10, 144.0.0.0/10, 144.96.0.0/11, 144.224.0.0/11, 150.0.0.0/11, 150.96.0.0/11, 150.128.0.0/11, 150.192.0.0/10, 152.96.0.0/11, 153.0.0.0/10, 153.96.0.0/11, 157.0.0.0/10, 157.96.0.0/11, 157.128.0.0/11, 157.224.0.0/11, 159.224.0.0/11, 161.192.0.0/11, 162.96.0.0/11, 163.0.0.0/10, 163.96.0.0/11, 163.128.0.0/10, 163.192.0.0/11, 166.96.0.0/11, 167.128.0.0/10, 167.192.0.0/11, 168.160.0.0/11, 169.254.0.0/16, 171.0.0.0/9, 171.192.0.0/11, 172.16.0.0/12, 175.0.0.0/9, 175.128.0.0/10, 180.64.0.0/10, 180.128.0.0/9, 182.0.0.0/8, 183.0.0.0/10, 183.64.0.0/11, 183.128.0.0/9, 192.0.0.0/24, 192.0.2.0/24, 192.88.99.0/24, 192.96.0.0/11, 192.160.0.0/11, 198.18.0.0/15, 198.51.100.0/24, 202.0.0.0/9, 202.128.0.0/10, 202.192.0.0/11, 203.0.0.0/9, 203.128.0.0/10, 203.192.0.0/11, 210.0.0.0/10, 210.64.0.0/11, 210.160.0.0/11, 210.192.0.0/11, 211.64.0.0/10, 211.128.0.0/10, 218.0.0.0/9, 218.160.0.0/11, 218.192.0.0/10, 219.64.0.0/11, 219.128.0.0/11, 219.192.0.0/10, 220.96.0.0/11, 220.128.0.0/9, 221.0.0.0/11, 221.96.0.0/11, 221.128.0.0/9, 222.0.0.0/8, 223.0.0.0/11, 223.64.0.0/10, 223.128.0.0/9

dns-server = 223.5.5.5, 119.29.29.29, 223.6.6.6

[Proxy]
DefaultProxy=custom,<?php echo $host;?>,<?php echo $port;?>,aes-256-cfb,<?php echo $passwd;?>,http://138.128.195.155/SSEncrypt.module 

[Rule]

// CN TOP 100 DIRECT

DOMAIN-SUFFIX,baidu.com,DIRECT
DOMAIN-SUFFIX,qq.com,DIRECT
DOMAIN-SUFFIX,weibo.com,DIRECT
DOMAIN-SUFFIX,sogou.com,DIRECT
DOMAIN-SUFFIX,firefoxchina.cn,DIRECT
DOMAIN-SUFFIX,taobao.com,DIRECT
DOMAIN-SUFFIX,zhongsou.com,DIRECT
DOMAIN-SUFFIX,youku.com,DIRECT
DOMAIN-SUFFIX,sina.com.cn,DIRECT
DOMAIN-SUFFIX,qpic.cn,DIRECT
DOMAIN-SUFFIX,jd.com,DIRECT
DOMAIN-SUFFIX,163.com,DIRECT
DOMAIN-SUFFIX,ifeng.com,DIRECT
DOMAIN-SUFFIX,1360.com,DIRECT
DOMAIN-SUFFIX,cntv.cn,DIRECT
DOMAIN-SUFFIX,sohu.com,DIRECT
DOMAIN-SUFFIX,so.com,DIRECT
DOMAIN-SUFFIX,icbc.com.cn,DIRECT
DOMAIN-SUFFIX,58.com,DIRECT
DOMAIN-SUFFIX,iqiyi.com,DIRECT
DOMAIN-SUFFIX,gdgs.gov.cn,DIRECT
DOMAIN-SUFFIX,51job.com,DIRECT
DOMAIN-SUFFIX,hao123.com,DIRECT
DOMAIN-SUFFIX,duba.com,DIRECT
DOMAIN-SUFFIX,eastmoney.com,DIRECT
DOMAIN-SUFFIX,zhaopin.com,DIRECT
DOMAIN-SUFFIX,tianya.cn,DIRECT
DOMAIN-SUFFIX,maxthon.cn,DIRECT
DOMAIN-SUFFIX,maxthon.com,DIRECT
DOMAIN-SUFFIX,kankan.com,DIRECT
DOMAIN-SUFFIX,ganji.com,DIRECT
DOMAIN-SUFFIX,verisign.com,DIRECT
DOMAIN-SUFFIX,xunlei.com,DIRECT
DOMAIN-SUFFIX,mohurd.gov.cn,DIRECT
DOMAIN-SUFFIX,zhongsou.net,DIRECT
DOMAIN-SUFFIX,msn.com.cn,DIRECT
DOMAIN-SUFFIX,douban.com,DIRECT
DOMAIN-SUFFIX,tmall.com,DIRECT
DOMAIN-SUFFIX,scjst.gov.cn,DIRECT
DOMAIN-SUFFIX,letv.com,DIRECT
DOMAIN-SUFFIX,ccb.com,DIRECT
DOMAIN-SUFFIX,qihoo.com,DIRECT
DOMAIN-SUFFIX,xinhuanet.com,DIRECT
DOMAIN-SUFFIX,360.cn,DIRECT
DOMAIN-SUFFIX,zol.com.cn,DIRECT
DOMAIN-SUFFIX,dianping.com,DIRECT
DOMAIN-SUFFIX,duowan.com,DIRECT
DOMAIN-SUFFIX,people.com.cn,DIRECT
DOMAIN-SUFFIX,saic.gov.cn,DIRECT
DOMAIN-SUFFIX,weather.com.cn,DIRECT
DOMAIN-SUFFIX,126.net,DIRECT
DOMAIN-SUFFIX,autohome.com.cn,DIRECT
DOMAIN-SUFFIX,qiyi.com,DIRECT
DOMAIN-SUFFIX,firefox.news.cn,DIRECT
DOMAIN-SUFFIX,t.cn,DIRECT
DOMAIN-SUFFIX,zhihu.com,DIRECT
DOMAIN-SUFFIX,gmw.cn,DIRECT
DOMAIN-SUFFIX,admaster.com.cn,DIRECT
DOMAIN-SUFFIX,miercn.com,DIRECT
DOMAIN-SUFFIX,10086.cn,DIRECT
DOMAIN-SUFFIX,pcauto.com.cn,DIRECT
DOMAIN-SUFFIX,vip.com,DIRECT
DOMAIN-SUFFIX,qingdao.gov.cn,DIRECT
DOMAIN-SUFFIX,56.com,DIRECT
DOMAIN-SUFFIX,abchina.com,DIRECT
DOMAIN-SUFFIX,wzwlxt.gov.cn,DIRECT
DOMAIN-SUFFIX,sohu.com.cn,DIRECT
DOMAIN-SUFFIX,v-56.com,DIRECT
DOMAIN-SUFFIX,53kf.com,DIRECT
DOMAIN-SUFFIX,nbhrss.gov.cn,DIRECT
DOMAIN-SUFFIX,bing.com,DIRECT
DOMAIN-SUFFIX,bitauto.com,DIRECT
DOMAIN-SUFFIX,sdxm.gov.cn,DIRECT
DOMAIN-SUFFIX,12306.cn,DIRECT
DOMAIN-SUFFIX,microsoft.com,DIRECT
DOMAIN-SUFFIX,pconline.com.cn,DIRECT
DOMAIN-SUFFIX,amazon.cn,DIRECT
DOMAIN-SUFFIX,gzaic.gov.cn,DIRECT
DOMAIN-SUFFIX,csrc.gov.cn,DIRECT
DOMAIN-SUFFIX,mop.com,DIRECT
DOMAIN-SUFFIX,china.com.cn,DIRECT
DOMAIN-SUFFIX,ctrip.com,DIRECT
DOMAIN-SUFFIX,tudou.com,DIRECT
DOMAIN-SUFFIX,mof.gov.cn,DIRECT
DOMAIN-SUFFIX,docin.com,DIRECT
DOMAIN-SUFFIX,worldful.cn,DIRECT
DOMAIN-SUFFIX,tanx.com,DIRECT
DOMAIN-SUFFIX,china.cn,DIRECT
DOMAIN-SUFFIX,sdxy.gov.cn,DIRECT
DOMAIN-SUFFIX,sandai.net,DIRECT
DOMAIN-SUFFIX,xmrs.gov.cn,DIRECT
DOMAIN-SUFFIX,alexa.com,DIRECT
DOMAIN-SUFFIX,amazon.com,DIRECT
DOMAIN-SUFFIX,wo.cn,DIRECT
DOMAIN-SUFFIX,scpta.gov.cn,DIRECT
DOMAIN-SUFFIX,ce.cn,DIRECT
DOMAIN-SUFFIX,youth.cn,DIRECT
DOMAIN-SUFFIX,aliyun.com,DIRECT
DOMAIN-SUFFIX,youdao.com,DIRECT
DOMAIN-SUFFIX,suning.com,DIRECT

// CN HOT DIRECT

DOMAIN-SUFFIX,cn,DIRECT
DOMAIN-SUFFIX,jd.com,DIRECT
DOMAIN-SUFFIX,yhd.com,DIRECT
DOMAIN-SUFFIX,58cdn.com,DIRECT
DOMAIN-SUFFIX,qunarzz.com,DIRECT
DOMAIN-SUFFIX,avosapps.com,DIRECT
DOMAIN-SUFFIX,mob.com,DIRECT
DOMAIN-SUFFIX,same.com,DIRECT
DOMAIN-SUFFIX,toutiao.com,DIRECT
DOMAIN-SUFFIX,zaih.com,DIRECT
DOMAIN-SUFFIX,lantouzi.com,DIRECT
DOMAIN-SUFFIX,smzdm.com,DIRECT
DOMAIN-SUFFIX,126.net,DIRECT
DOMAIN-SUFFIX,163.com,DIRECT
DOMAIN-SUFFIX,alicdn.com,DIRECT
DOMAIN-SUFFIX,amap.com,DIRECT
DOMAIN-SUFFIX,bdimg.com,DIRECT
DOMAIN-SUFFIX,bdstatic.com,DIRECT
DOMAIN-SUFFIX,cnbeta.com,DIRECT
DOMAIN-SUFFIX,cnzz.com,DIRECT
DOMAIN-SUFFIX,douban.com,DIRECT
DOMAIN-SUFFIX,gtimg.com,DIRECT
DOMAIN-SUFFIX,hao123.com,DIRECT
DOMAIN-SUFFIX,haosou.com,DIRECT
DOMAIN-SUFFIX,ifeng.com,DIRECT
DOMAIN-SUFFIX,iqiyi.com,DIRECT
DOMAIN-SUFFIX,netease.com,DIRECT
DOMAIN-SUFFIX,qhimg.com,DIRECT
DOMAIN-SUFFIX,qq.com,DIRECT
DOMAIN-SUFFIX,sogou.com,DIRECT
DOMAIN-SUFFIX,sohu.com,DIRECT
DOMAIN-SUFFIX,soso.com,DIRECT
DOMAIN-SUFFIX,suning.com,DIRECT
DOMAIN-SUFFIX,tmall.com,DIRECT
DOMAIN-SUFFIX,tudou.com,DIRECT
DOMAIN-SUFFIX,weibo.com,DIRECT
DOMAIN-SUFFIX,youku.com,DIRECT
DOMAIN-SUFFIX,xunlei.com,DIRECT
DOMAIN-SUFFIX,zhihu.com,DIRECT
DOMAIN-SUFFIX,huofu.com,DIRECT
DOMAIN-SUFFIX,5wei.com,DIRECT
DOMAIN-SUFFIX,ip138.com,DIRECT

DOMAIN-SUFFIX,alipay.com,DIRECT
DOMAIN-SUFFIX,taobao.com,DIRECT
DOMAIN-SUFFIX,baidu.com,DIRECT
DOMAIN-SUFFIX,360buy.com,DIRECT
DOMAIN-SUFFIX,baidu.com,DIRECT

//CDN DIRECT
DOMAIN-KEYWORD,cdn,DIRECT

//Other Proxy and Remote-DNS

DOMAIN-KEYWORD,a,Proxy,force-remote-dns
DOMAIN-KEYWORD,b,Proxy,force-remote-dns
DOMAIN-KEYWORD,c,Proxy,force-remote-dns
DOMAIN-KEYWORD,d,Proxy,force-remote-dns
DOMAIN-KEYWORD,e,Proxy,force-remote-dns
DOMAIN-KEYWORD,f,Proxy,force-remote-dns
DOMAIN-KEYWORD,g,Proxy,force-remote-dns
DOMAIN-KEYWORD,h,Proxy,force-remote-dns
DOMAIN-KEYWORD,i,Proxy,force-remote-dns
DOMAIN-KEYWORD,j,Proxy,force-remote-dns
DOMAIN-KEYWORD,k,Proxy,force-remote-dns
DOMAIN-KEYWORD,l,Proxy,force-remote-dns
DOMAIN-KEYWORD,m,Proxy,force-remote-dns
DOMAIN-KEYWORD,n,Proxy,force-remote-dns
DOMAIN-KEYWORD,o,Proxy,force-remote-dns
DOMAIN-KEYWORD,p,Proxy,force-remote-dns
DOMAIN-KEYWORD,q,Proxy,force-remote-dns
DOMAIN-KEYWORD,r,Proxy,force-remote-dns
DOMAIN-KEYWORD,s,Proxy,force-remote-dns
DOMAIN-KEYWORD,t,Proxy,force-remote-dns
DOMAIN-KEYWORD,u,Proxy,force-remote-dns
DOMAIN-KEYWORD,v,Proxy,force-remote-dns
DOMAIN-KEYWORD,w,Proxy,force-remote-dns
DOMAIN-KEYWORD,x,Proxy,force-remote-dns
DOMAIN-KEYWORD,y,Proxy,force-remote-dns
DOMAIN-KEYWORD,z,Proxy,force-remote-dns
DOMAIN-KEYWORD,1,Proxy,force-remote-dns
DOMAIN-KEYWORD,2,Proxy,force-remote-dns
DOMAIN-KEYWORD,3,Proxy,force-remote-dns
DOMAIN-KEYWORD,4,Proxy,force-remote-dns
DOMAIN-KEYWORD,5,Proxy,force-remote-dns
DOMAIN-KEYWORD,6,Proxy,force-remote-dns
DOMAIN-KEYWORD,7,Proxy,force-remote-dns
DOMAIN-KEYWORD,8,Proxy,force-remote-dns
DOMAIN-KEYWORD,9,Proxy,force-remote-dns
DOMAIN-KEYWORD,0,Proxy,force-remote-dns
DOMAIN-KEYWORD,-,Proxy,force-remote-dns

// LAN
IP-CIDR,192.168.0.0/16,DIRECT
IP-CIDR,10.0.0.0/8,DIRECT
IP-CIDR,172.16.0.0/12,DIRECT
IP-CIDR,127.0.0.0/8,DIRECT

// Telegram
IP-CIDR,91.108.56.0/22,Proxy,no-resolve
IP-CIDR,91.108.4.0/22,Proxy,no-resolve
IP-CIDR,109.239.140.0/24,Proxy,no-resolve
IP-CIDR,149.154.160.0/20,Proxy,no-resolve


GEOIP,CN,DIRECT

FINAL,Proxy
