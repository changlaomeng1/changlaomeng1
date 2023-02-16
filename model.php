---
title: Settings
---

<!DOCTYPE html>
<html lang="en" style="height:100%;">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137788272-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-137788272-1');
  </script>

  <title>Moloch Settings</title>

  <!-- Required meta tags always come first -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="Moloch settings" />
  <!-- facebook open graph tags -->
  <meta property="og:url" content="http://molo.ch/settings" />
  <meta property="og:description" content="Moloch settings" />
  <meta property="og:image" content="http://molo.ch/moloch_2x2.png" />
  <!-- twitter card tags additive with the og: tags -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:domain" value="molo.ch" />
  <meta name="twitter:description" value="Frequently asked Moloch questions" />
  <meta name="twitter:image" content="http://molo.ch/moloch_2x2.png" />
  <meta name="twitter:url" value="http://molo.ch/settings" />

  <!-- fontawesome http://fontawesome.io/ -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS https://getbootstrap.com/ -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- custom index page styles -->
  <link rel="stylesheet" type="text/css" href="index.css">

  <!-- page functions -->
  <script src="index.js"></script>

</head>

<body id="viewport"
  class="full-height-body">

  <!-- navbar -->
  {%- include navbar.html -%}

  <!-- toc nav -->
  <div class="left-nav d-none d-sm-block">
    <div class="nav nav-pills nav-pills-nested pb-3">
      <a href="#ini-settings"
        class="nav-link"
        title="General">
        INI Settings
      </a>
      <a class="nav-link nested"
        href="#basic-settings"
        title="Basic Settings">
        Basic Settings
      </a>
      <a class="nav-link nested"
        href="#advanced-settings"
        title="Advanced Settings">
        Advanced Settings
      </a>
      <a class="nav-link nested nested-more"
        href="#reader-tpacketv3-settings"
        title="Reader tpacketv3 Settings">
        Reader tpacketv3 Settings
      </a>
      <a class="nav-link nested nested-more"
        href="#reader-daq-settings"
        title="Reader daq Settings">
        Reader daq Settings
      </a>
      <a class="nav-link nested nested-more"
        href="#reader-pfring-settings"
        title="Reader pfring Settings">
        Reader pfring Settings
      </a>
      <a class="nav-link nested nested-more"
        href="#reader-snf-settings"
        title="Reader snf Settings">
        Reader snf Settings
      </a>
      <a class="nav-link nested nested-more"
        href="#writer-s3-settings"
        title="Writer S3 Settings">
        Writer S3 Settings
      </a>
      <a class="nav-link nested"
        href="#debug-settings"
        title="Debug Settings">
        Debug Settings
      </a>
      <a class="nav-link nested"
        href="#custom-fields"
        title="custom-fields">
        custom-fields
      </a>
      <a class="nav-link nested"
        href="#custom-views"
        title="custom-views">
        custom-views
      </a>
      <a class="nav-link nested"
        href="#moloch-clusters"
        title="moloch-clusters">
        moloch-clusters
      </a>
      <a class="nav-link nested"
        href="#multi-viewer-settings"
        title="Multi Viewer Settings">
        Multi Viewer Settings
      </a>
      <a class="nav-link nested"
        href="#override-ips"
        title="override-ips">
        override-ips
      </a>
      <a class="nav-link nested"
        href="#headers-http-request"
        title="headers-http-request">
        headers-http-request
      </a>
      <a class="nav-link nested"
        href="#headers-http-response"
        title="headers-http-response">
        headers-http-response
      </a>
      <a class="nav-link nested"
        href="#headers-email"
        title="headers-email">
        headers-email
      </a>
      <a class="nav-link nested"
        href="#right-click"
        title="right-click">
        right-click
      </a>
      <a class="nav-link nested"
        href="#packet-drop-ips"
        title="packet-drop-ips">
        packet-drop-ips
      </a>
      <a class="nav-link nested"
        href="#pcap-at-rest-encryption"
        title="PCAP at Rest Encryptions">
        PCAP at Rest Encryption
      </a>
      <a href="#plugins"
        class="nav-link"
        title="Plugins">
        Plugins
      </a>
      <a class="nav-link nested"
        href="#wise"
        title="WISE">
        WISE
      </a>
      <a class="nav-link nested"
        href="#netflow"
        title="Netflow">
        Netflow
      </a>
      <a class="nav-link nested"
        href="#suricata"
        title="Suricata">
        Suricata
      </a>
      <a class="nav-link nested"
        href="#tagger"
        title="Tagger">
        Tagger
      </a>
      <a class="nav-link nested"
        href="#lua"
        title="Lua">
        Lua
      </a>
      <a class="nav-link nested"
        href="#tcphealthcheck"
        title="TCP Health Check">
        TCP Health Check
      </a>
      <a href="#high-performance-settings"
        class="nav-link"
        title="High Performance Settings">
        High Performance Settings
      </a>
    </div>
  </div> <!-- /toc nav -->

  <!-- toc expand/collapse -->
  <div class="collapse-btn d-none d-sm-block"
    onclick="toggleToc()">
    <span class="fa fa-angle-double-left">
    </span>
  </div> <!-- /toc expand/collapse -->

  <!-- settings container -->
  <div class="full-height-container">

    <!-- settings content -->
    <div class="pl-3 pr-3">

      <!-- ini settings -->
      <h1 id="ini-settings"
        class="border-bottom">
        INI Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h1>
      <p>
        Moloch uses a tiered system for configuration variables. A tiered
        system allows Moloch to share one config file for many machines. The
        ordering of sections within the config file doesn't matter.
      </p>
      <p class="mb-0">
        Order of config variables:
      </p>
      <ol>
        <li>
          [optional] The section titled with the node name is used first.
          Moloch will always tag sessions with node: &lt;node name&gt;
        </li>
        <li>
          [optional] If a node has a nodeClass variable, the section titled
          with the nodeClass name is used next. Sessions will be tagged with
          node:&lt;node class name&gt; which is useful if watching different
          network classes.
        </li>
        <li>
          The section titled "default" is used last.
        </li>
      </ol>
      <!-- /ini settings -->

      <!-- basic settings -->
      <h2 id="basic-settings">
        Basic Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="bpf">
              bpf
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              The bpf filter used to reduce traffic. Used both on live and file
              traffic.
            </td>
          </tr>
          <tr>
            <td id="businessDayStart">
              businessDayStart
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              If both businessDayStart and businessDayEnd are set, it displays a
              colored background on the sessions timeline graph during business hours.
              Values are in hours from midnight UTC. For example: 9am EST would be 13.
            </td>
          </tr>
          <tr>
            <td id="businessDayEnd">
              businessDayEnd
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              If both businessDayStart and businessDayEnd are set, it displays a
              colored background on the sessions timeline graph during business hours.
              Values are in hours from midnight UTC. For example: 5pm EST would be 21.
            </td>
          </tr>
          <tr>
            <td id="businessDays">
              businessDays
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              1,2,3,4,5
            </td>
            <td>
              Displays a colored background on the sessions timeline graph on
              only these days. businessDayStart and businessDayEnd must be set
              for these to be of use. Values are comma separted list of days of
              the week as numbers. The week starts at Sunday = 0 and ends on
              Saturday = 6. For example: Monday through Friday would be 1,2,3,4,5
            </td>
          </tr>
          <tr>
            <td id="certfile">
              certFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Public certificate to use for https, if not set then http will be
              used. keyFile must also be set.
            </td>
          </tr>
          <tr>
            <td id="cronqueries">
              cronQueries
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE
            </td>
            <td>
              Set on 1 viewer node per cluster, this viewer node will perform all the cron queries for the cluster.
            </td>
          </tr>
          <tr>
            <td id="dontsavebpfs">
              dontSaveBPFs
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon ';' separated list of bpf filters which when matched
              for a session causes the remaining pcap from being saved for the
              session. It is possible to specify the number of packets to save
              per filter by ending with a :num. For example
              dontSaveBPFs = port 22:5 will only save 5 packets for port
              22 sessions. Currently only the initial packet is matched against
              the bpfs.
            </td>
          </tr>
          <tr>
            <td id="dontsavetags">
              dontSaveTags
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon ';' separated list of tags which once capture sets for
              a session causes the remaining pcap from being saved for the
              session. It is likely that the initial packets WILL be
              saved for the session since tags usually aren't set until after
              several packets. It is possible to specify the number of packets
              to save per filter by ending with a :num.
            </td>
          </tr>
          <tr>
            <td id="dropgroup">
              dropGroup
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Group to drop privileges to. The pcapDir must be writable by this
              group or to the user specified by dropUser
            </td>
          </tr>
          <tr>
            <td id="dropuser">
              dropUser
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              User to drop privileges to. The pcapDir must be writable by this
              user or to the group specified by dropGroup
            </td>
          </tr>
          <tr>
            <td id="esptimeout">
              espTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              600
            </td>
            <td>
              For ESP sessions, Moloch writes a session record after this many
              seconds of inactivity since the last session save.
            </td>
          </tr>
          <tr>
            <td id="elasticsearch">
              elasticsearch
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              http://localhost:9200
            </td>
            <td>
              A comma separated list of urls to use to connect to the
              Elasticsearch cluster. If not using a VIP, a different
              Elasticsearch node can be specified for each Moloch node. If
              Elasticsearch requires a user/password those can be placed in the
              url also, http://user:pass@hostname:port
            </td>
          </tr>
          <tr>
            <td id="elasticsearchtimeout">
              elasticsearchTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              300
            </td>
            <td>
              Approximate timeout for most viewer requests to elasticsearch.
              Elasticsearch will automatically cancel any request after this expires.
            </td>
          </tr>
          <tr>
            <td id="esadminusers">
              esAdminUsers
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>EMPTY</td>
            <td>
              A comma separated list of users that are allowed to use the ES Admin stats tab.
              This tab allows the user to change several of the ES settings from the UI.
            </td>
          </tr>
          <tr>
            <td id="esclientcert">esClientCert<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>EMPTY</td>
            <td>
              (Since 2.0) The public key file to use for tls client authentication with elasticsearch.  Must also set esClientKey.
            </td>
          </tr>
          <tr>
            <td id="esclientkey">esClientKey<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>EMPTY</td>
            <td>
              (Since 2.0) The private key file to use for tls client authentication with elasticsearch.  Must also set esClientCert.
            </td>
          </tr>
          <tr>
            <td id="esclientkeypass">esClientKeyPass<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>EMPTY</td>
            <td>
              (Since 2.0) The password for the esClientKey setting.
            </td>
          </tr>
          <tr>
            <td id="freespaceg">
              freeSpaceG
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              5%
            </td>
            <td>
              Delete pcap files when free space is lower then this. This does
              NOT delete the session records in the database. It is recommended
              this value is between 5% and 10% of the disk. Database deletes
              are done by the db.pl expire. Can also be specified using a
              percentage.
            </td>
          </tr>
          <tr>
            <td id="geoipasnfile">
              geoipASNFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              (Pre 1.0) Path to the maxmind geoip ASN file.
              <a class="no-decoration"
                href="http://www.maxmind.com/download/geoip/database/asnum/GeoIPASNum.dat.gz"
                rel="nofollow">Download free version</a>
            </td>
          </tr>
          <tr>
            <td id="geoipfile">
              geoipFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              (Pre 1.0) Path to the maxmind geoip country file.
              <a class="no-decoration"
                href="http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz"
                rel="nofollow">Download free version</a>
            </td>
          </tr>
          <tr>
            <td id="geolite2asn">
              geoLite2ASN
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              /usr/share/GeoIP/GeoLite2-ASN.mmdb;/data/moloch/etc/GeoLite2-ASN.mmdb<br>
              (Pre 2.2) /data/moloch/etc/GeoLite2-ASN.mmdb
            </td>
            <td>
              A Maxmind account is required to use this feature.  We recommend installing and setting up the geoipupdate program included with most Linux releases.<br>
              (Since 2.2) Semicolon ';' separated list of maxmind geoip country files.  The first file found will be used.  If no files are found a warning will be issued.  To disable warning set to a blank string.<br>
              (Since 1.0) Path to the maxmind geoip ASN file.
              <a class="no-decoration"
                href="https://updates.maxmind.com/app/update_secure?edition_id=GeoLite2-ASN"
                rel="nofollow">Download free version</a>
            </td>
          </tr>
          <tr>
            <td id="geolite2country">
              geoLite2Country
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              /usr/share/GeoIP/GeoLite2-Country.mmdb;/data/moloch/etc/GeoLite2-Country.mmdb<br>
              (Pre 2.2)/data/moloch/etc/GeoLite2-Country.mmdb
            </td>
            <td>
              A Maxmind account is required to use this feature.  We recommend installing and setting up the geoipupdate program included with most Linux releases.<br>
              (Since 2.2) Semicolon ';' separated list of maxmind geoip country files.  The first file found will be used.  If no files are found a warning will be issued.  To disable warning set to a blank string.<br>
              (Since 1.0) Path to the maxmind geoip country file.
              <a class="no-decoration"
                href="https://updates.maxmind.com/app/update_secure?edition_id=GeoLite2-Country"
                rel="nofollow">Download free version</a>
            </td>
          </tr>
          <tr>
            <td id="httprealm">
              httpRealm
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              Moloch
            </td>
            <td>
              HTTP Digest Realm - Must be in the default section of
              configuration file. Changing the value will cause all previous
              stored passwords to no longer work.
            </td>
          </tr>
          <tr>
            <td id="icmptimeout">
              icmpTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              10
            </td>
            <td>
              For ICMP sessions, Moloch writes a session record after this
              many seconds of inactivity since the last session save.
            </td>
          </tr>
          <tr>
            <td id="interface">
              interface
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon ';' separated list of interfaces to listen on for live traffic.
            </td>
          </tr>
          <tr>
            <td id="keyfile">
              keyFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Private certificate to use for https, if not set then http will
              be used. certFile must also be set.
            </td>
          </tr>
          <tr>
            <td id="magicmode">magicMode<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              both (since 1.5.0) or libmagic (before 1.5.0)
            </td>
            <td>
              libfile can be VERY slow. Less accurate "magicing" is available for http/smtp bodies:
              <ul class="mb-0">
                <li>libmagic - normal libmagic</li>
                <li>libmagicnotext - libmagic, but turns off text checks</li>
                <li>molochmagic - (removed in 1.5.0) subset of libmagic input files, and less accurate</li>
                <li>both - (since 1.5.0) try basic and then libmagic</li>
                <li>basic - 50+ of most common headers</li>
                <li>none - no libmagic or basic calls</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="maxfilesizeg">
              maxFileSizeG
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              4
            </td>
            <td>
              The max raw pcap file size in gigabytes. The disk should have
              room for at least 10*maxFileSizeG files.
            </td>
          </tr>
          <tr>
            <td id="maxfiletimem">
              maxFileTimeM
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              0
            </td>
            <td>
              The max time in minutes between rotating pcap files. Useful if
              there is an external utility that needs to look for closed files
              every so many minutes. Setting to 0 means only use
              maxFileSizeG
            </td>
          </tr>
          <tr>
            <td id="maxpackets">
              maxPackets
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              10000
            </td>
            <td>
              Moloch writes a session record after this many packets since the
              last save. Moloch is only tested at 10k, anything above is not
              recommended.
            </td>
          </tr>
          <tr>
            <td id="maxpacketsinqueue">
              maxPacketsInQueue
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              200000
            </td>
            <td>
              How many packets per packet thread that can be waiting to be processed.
              Moloch will stop dropping packets if the queue fills up.
            </td>
          </tr>
          <tr>
            <td id="maxstreams">
              maxStreams
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              1500000
            </td>
            <td>
              An aproximiate maximum number of active sessions Moloch/libnids
              will try and monitor
            </td>
          </tr>
          <tr>
            <td id="minpacketssavebpfs">
              minPacketsSaveBPFs
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              &nbsp;
            </td>
            <td>
              Semicolon ';' separated list of bpf filters which
              when matched for a session have their SPI data NOT saved to
              Elasticsearch. PCAP data is still saved however. It is possible
              to specify the number of min packets required for SPI to be saved
              by ending with a :num. A use case is a scanning host inside the
              network that you only want to capture if their is a conversation
              "tcp and host 10.10.10.10:1".
            </td>
          </tr>
          <tr>
            <td id="ouifile">
              ouiFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              The mac address lookup for manufactures file
              <a class="no-decoration"
                href="https://raw.githubusercontent.com/wireshark/wireshark/master/manuf"
                rel="nofollow">Download free version</a>
            </td>
          </tr>
          <tr>
            <td id="packetthreads">
              packetThreads
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              1
            </td>
            <td>
              Number of threads to use to process packets AFTER the reader has
              received the packets. This also controls how many packet queues
              there are, since each thread has its own queue. Basically how
              much CPU to dedicate to parsing the packets. Increase this if you
              get errors about dropping packets or the packetQ is over flowing.
            </td>
          </tr>
          <tr>
            <td id="serversecret">
              serverSecret
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              Value of passwordSecret
            </td>
            <td>
              The server-to-server shared key. It must be set in the [default]
              section of the config file, and all viewers in the moloch cluster
              must have the same value. It can be, and should be changed
              periodically.
            </td>
          </tr>
          <tr>
            <td id="passwordsecret">
              passwordSecret
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Password hash secret - Must be in [default] section of the config file, and all viewers in the moloch cluster must have the same value.
              Since elasticsearch is wide open by default, we encrypt the stored password hashes with this so a malicious person can't insert a working new account.
              It is also used for secure server-to-server communication if serverSecret is not set a different value.
              Don't set if you do not want user authentication.
              Changing the value will make all previously stored passwords no longer work.
            </td>
          </tr>
          <tr>
            <td id="parsecookievalue">
              parseCookieValue
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              Parse HTTP request cookie values, cookie keys are always parsed.
            </td>
          </tr>
          <tr>
            <td id="parseqsvalue">
              parseQSValue
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              Parse HTTP query string values, query string keys are always
              parsed.
            </td>
          </tr>
          <tr>
            <td id="parsesmb">
              parseSMB
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              true
            </td>
            <td>
              Parse extra SMB traffic info
            </td>
          </tr>
          <tr>
            <td id="parsednsrecordall">
              parseDNSRecordAll
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              (Since 1.6) Parse a full DNS record (query, answer,
              authoritative, and additional) and store various DNS information
              (look up hostname, name server IPs, mail exchange server IPs, and
              so on) into multiple ES fields
            </td>
          </tr>
          <tr>
            <td id="parsesmtp">
              parseSMTP
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              true
            </td>
            <td>
              Parse extra SMTP traffic info
            </td>
          </tr>
          <tr>
            <td id="parsesmtpheaderall">
              parseSMTPHeaderAll
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              (Since 1.6) Parse ALL SMTP request headers not already parsed
              using the [headers-email] section
            </td>
          </tr>
          <tr>
            <td id="parsehttpheaderrequestall">
              parseHTTPHeaderRequestAll
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              (Since 1.6) Parse ALL HTTP request headers not already parsed
              using the [headers-http-request] section
            </td>
          </tr>
          <tr>
            <td id="parsehttpheaderresponseall">
              parseHTTPHeaderResponseAll
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              (Since 1.6) Parse ALL HTTP request headers not already parsed
              using the [headers-http-response] section
            </td>
          </tr>
          <tr>
            <td id="pcapdir">
              pcapDir
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon separated list of directories to save pcap files to.
              The directory to save pcap to is picked using round robin by default, see <a href="#pcapdiralgorithm">pcapDirAlgorithm</a> for more options.
            </td>
          </tr>
          <tr>
            <td id="pcapdirtemplate">
              pcapDirTemplate
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              When set, this strftime template is appended to
              pcapDir and allows multiple directories to be created based on
              time.
            </td>
          </tr>
          <tr>
            <td id="pcapdiralgorithm">
              pcapDirAlgorithm
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              round-robin
            </td>
            <td>
              When pcapDir is a list of directories, this determines how Moloch
              chooses which directory to use for each new pcap file.
              <br>
              Possible values: round-robin (rotate sequentially),
              max-free-percent (choose the directory on the filesystem
              with the highest percentage of available space),
              max-free-bytes (choose the directory on the filesystem
              with the highest number of available bytes).
            </td>
          </tr>
          <tr>
            <td id="parsersdir">
              parsersDir
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              /data/moloch/parsers ; ./parsers
            </td>
            <td>
              Semicolon separated list of directories to load parsers
              from
            </td>
          </tr>
          <tr>
            <td id="pluginsdir">
              pluginsDir
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon separated list of directories to load plugins
              from
            </td>
          </tr>
          <tr>
            <td id="plugins">
              plugins
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon separated list of plugins to load and the order
              to load them in. Must include the trailing .so
            </td>
          </tr>
          <tr>
            <td id="rootplugins">
              rootPlugins
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon separated list of plugins to load as root and
              the order to load them in. Must include the trailing .so
            </td>
          </tr>
          <tr>
            <td id="readtruncatedpackets">
              readTruncatedPackets
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE
            </td>
            <td>
              Capture will try and process truncated packets the best it can.
              In general it is best to have full packet captures for Moloch to work well.
            </td>
          </tr>
          <tr>
            <td id="rirfile">
              rirFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Path of the RIR assignments file.
              <a class="no-decoration"
                href="https://www.iana.org/assignments/ipv4-address-space/ipv4-address-space.csv"
                rel="nofollow">Download</a>
            </td>
          </tr>
          <tr>
            <td id="rotateindex">
              rotateIndex
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              daily
            </td>
            <td>
              Specifies how often to create a new index in Elasticsearch. Use
              daily or a form of hourly for busy live instances, use weekly or
              monthly for research instances. When choosing a value, the goal
              is to have the avg shard be around 30G. Prior to 1.5.0 changing
              the value will cause previous sessions to be unreachable through
              the interface, since 1.5.0 you can set queryAllIndices if you
              need to change the value. Prior to 1.5.0 if using the multi
              viewer then all Moloch clusters must have the same value.
              <br>
              Possible values are: hourly, daily, weekly,
              monthly.
              <br>
              1.5.0 added hourly2, hourly3, hourly4,
              hourly6, hourly8, hourly12 which will bucket
              N number of hours together. So hourly3 for example will
              make it so each shard has 3 hours of data. hourly1 would
              be the same as hourly and hourly24 would be the
              same as daily.
            </td>
          </tr>
          <tr>
            <td id="rulesfiles">
              rulesFiles
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              A semicolon separated list of files that contain
              rules. These rules match against fields set and can set other
              fields or meta data about the sessions. See
              <a class="no-decoration"
                href="rulesformat">
                RulesFormat</a>
              for the format of the files.
            </td>
          </tr>
          <tr>
            <td id="sctptimeout">
              sctpTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              60
            </td>
            <td>
              For SCTP sessions, Moloch writes a session record after this many
              seconds of inactivity since the last session save.
            </td>
          </tr>
          <tr>
            <td id="smtpipheaders">
              smtpIpHeaders
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon separated list of SMTP Headers that have ips,
              need to have the terminating colon ':'
            </td>
          </tr>
          <tr>
            <td id="spidatamaxindices">
              spiDataMaxIndices
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              1
            </td>
            <td>
              Specify the max number of indices we calculate spidata for.
              Elasticsearch will blow up if we allow the spiData to search too
              many indices.
            </td>
          </tr>
          <tr>
            <td id="supportsha256">
              supportSha256
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE
            </td>
            <td>
              Generate Sha256 hashes along side of md5 hashes content.
            </td>
          </tr>
          <tr>
            <td id="tcpsavetimeout">
              tcpSaveTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              480
            </td>
            <td>
              For TCP sessions, Moloch writes a session record after this many
              seconds since the last session save, no matter if active or
              inactive.
            </td>
          </tr>
          <tr>
            <td id="tcptimeout">
              tcpTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              480
            </td>
            <td>
              For TCP sessions, Moloch writes a session record after this many
              seconds of inactivity since the last session save.
            </td>
          </tr>
          <tr>
            <td id="titletemplate">
              titleTemplate
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              _cluster_ - _page_ _-view_ _-expression_
            </td>
            <td>
              <ul class="mb-0">
                <li>
                  _cluster_ = ES cluster name
                </li>
                <li>
                  _userId_ = logged in User Id
                </li>
                <li>
                  _userName_ = logged in User Name
                </li>
                <li>
                  _page_ = internal page name
                </li>
                <li>
                  _expression_ = current search expression if set, otherwise
                  blank
                </li>
                <li>
                  _-expression_ = " - " + current search expression if set,
                  otherwise blank, prior spaces removed
                </li>
                <li>
                  _view_ = current view if set, otherwise blank
                </li>
                <li>
                  _-view_ = " - " + current view if set, otherwise blank, prior
                  spaces removed
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="udptimeout">
              udpTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              60
            </td>
            <td>
              For UDP sessions, Moloch writes a session record after this many
              seconds of inactivity since the last session save.
            </td>
          </tr>
          <tr>
            <td id="usernameheader">
              userNameHeader
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Header to use for determining the username to check in the database for instead of using http digest.
              Use this if you have apache or something else doing the auth.
              The Web Auth Header checkbox must be set for user.
              The userNameHeader setting should be the lower case version of the header apache is setting.
              ONLY set this header on the viewer the reverse proxy is talking to, it doesn't need to be set on every viewer.
              It is recommended you set viewHost to localhost when using this setting, or use iptables, otherwise a hacker can just send this header.
            </td>
          </tr>
                      <tr>
            <td id="requiredauthheader">
              requiredAuthHeader
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Used for allowing an external system like LDAP or Active Directory to
              manage user provisioning and activation/deactivation.  It is assumed that the
              header contains a list of user roles (like active directory groups)
              which are inspected against the value in <code>requiredAuthHeaderVal</code> (see below)
              to verify that the user is in the appropriate group (ie. "MolochUsers").  If
              so, the user is authorized to use the system, and if an account does not
              already exist for them in the moloch user store,
              it is created (see <code>userAutoCreateTmpl</code>)
            </td>
          </tr>
          <tr>
            <td id="requiredauthheaderval">
              requiredAuthHeaderVal
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              See <code>requiredAuthHeader</code> for more information.
            </td>
          </tr>
            <tr>
            <td id="userautocreatetmpl">
              userAutoCreateTmpl
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              When using <code>requiredAuthHeader</code> to externalize provisioning
              of users to a system like LDAP/AD, this configuration parameter is used
              to define the JSON structure used to automatically create a moloch user
              in the moloch users database if one does not exist.  The user will only
              be created if the <code>requiredAuthHeader</code> includes the expected
              value in <code>requiredAuthHeaderVal</code>, and is not automatically deleted
              if the auth headers are not present.  Values can be populated into
              the creation JSON to dynamically populate fields into the user database,
              which are passed in as HTTP headers along with the user and auth headers.
              The example value below creates a user with a userId pulled from the
              <code>http_auth_http_user</code> HTTP header with a name pulled from
              the <code>http_auth_mail</code> user header.  It is expected that these
              headers are passed in from an apache (or similar) instance that fronts
              the moloch viewer as described in the documentation supporting <code>userNameHeader</code>
              <code>
                {"userId": "${this.http_auth_http_user}", "userName": "${this.http_auth_mail}",
                "enabled": true, "webEnabled": true, "headerAuthEnabled": true,
                "emailSearch": true, "createEnabled": false, "removeEnabled": false, "packetSearch": true }
              </code>
            </td>
          </tr>
          <tr>
            <td id="viewerplugins">
              viewerPlugins
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon separated list of viewer plugins to load and the
              order to load them in. Must include the trailing .js
            </td>
          </tr>
          <tr>
            <td id="viewhost">
              viewHost
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              The ip used to listen. See the <code>host</code> section of
              <a class="no-decoration"
                href="https://nodejs.org/docs/latest-v8.x/api/net.html#net_server_listen_port_host_backlog_callback"
                rel="nofollow">https://nodejs.org/docs/latest-v8.x/api/net.html#net_server_listen_port_host_backlog_callback</a>
            </td>
          </tr>
          <tr>
            <td id="viewport">
              viewPort
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              8005
            </td>
            <td>
              Port for viewer to listen on
            </td>
          </tr>
          <tr>
            <td id="viewurl">
              viewUrl
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              http[s]://hostname:[viewport]
            </td>
            <td>
              The URL used to accecss this viewer instance
            </td>
          </tr>
          <tr>
            <td id="webbasepath">
              webBasePath
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              /
            </td>
            <td>
              The base url for Moloch web requests. Must end with a / or bad
              things will happen.
            </td>
          </tr>
          <tr>
            <td id="yara">
              yara
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Where to load Yara rules from.
            </td>
          </tr>
          <tr>
            <td id="yaraeverypacket">
              yaraEveryPacket
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              TRUE
            </td>
            <td>
              (Since 1.5.0) Apply yara to every packet or just the packets
              that are classified.
            </td>
          </tr>
          <tr>
            <td id="yarafastmode">
              yaraFastMode
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              TRUE
            </td>
            <td>
              (Since 1.5.0) Set the Yara Fast Mode flag.
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /basic settings -->

      <!-- advanced settings -->
      <h2 id="advanced-settings">
        Advanced Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="accessLogFile">
              accessLogFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
                If left empty, then the viewer will log to stdout. It can be set to a filename and then logging will
                be directed there.
            </td>
          </tr>
          <tr>
            <td id="accessLogFormat">
              accessLogFormat
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              :date :username %1b[1m:method%1b[0m %1b[33m:url%1b[0m :status :res[content-length] bytes :response-time ms
            </td>
            <td>
              (Since 2.3) Set the log record format -- this uses Express Morgan. The string is URL Encoded and so uses %xx
              to escape special characters.
              See the Morgan documentation for the <a href="https://github.com/expressjs/morgan">list of keywords</a>.
            </td>
          </tr>
          <tr>
            <td id="accessLogSuppressPaths">
              accessLogSuppressPaths
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
                (Since 2.3) This is a semi-colon seperated list of URL paths which should <em>not</em> be logged.
                Seeting this to /eshealth.json will suppress logging of all calls to that endpoint.
            </td>
          </tr>

          <tr>
            <td id="aes256Encryption">
              aes256Encryption
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              true (since 2.4.0)<br>
              false (before 2.4.0)
            </td>
            <td>
              (Since 2.2.0) Use better encryption when talking between viewer nodes
            </td>
          </tr>

          <tr>
            <td id="autogenerateid">
              autoGenerateId
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              (Since 1.6) Use Elasticsearch auto generated ids
            </td>
          </tr>
          <tr>
            <td id="catrustfile">caTrustFile<span class="fa fa-link small copy-link cursor-copy"onclick="copyLink(this, 'settings')"></span></td>
            <td>
              Empty
            </td>
            <td>
              Optional file with PEM encoded certificates to use when validating certs.
            </td>
          </tr>
          <tr>
            <td id="compresses">
              compressES
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              Compress requests to ES, reduces ES bandwidth by ~80% at the cost
              of increased CPU. MUST have "http.compression: true" in
              elasticsearch.yml file
            </td>
          </tr>
          <tr>
            <td id="dbbulksize">
              dbBulkSize
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              20000
            </td>
            <td>
              Size of indexing request to send to Elasticsearch. Increase if
              monitoring a high bandwidth network.
            </td>
          </tr>
          <tr>
            <td id="dbeshealthcheck">
              dbEsHealthCheck
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              TRUE
            </td>
            <td>
              Perform an Elasticsearch health check every 30 seconds and report on slowness or if not green.  For big clusters this should be disabled.
            </td>
          </tr>
          <tr>
            <td id="dbflushtimeout">
              dbFlushTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              5
            </td>
            <td>
              Number of seconds before we force a flush to Elasticsearch
            </td>
          </tr>
          <tr><td id="enablepacketlen">enablePacketLen<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              FALSE (2.0 and later), TRUE (before 2.0)
            </td>
            <td>
              (Since 2.0) Index all the packet lengths in elasticsearch
            </td>
          </tr>
          <tr>
            <td id="filenameops">
              filenameOps
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              (Since 1.5.0) A semicolon separated list of operations that use
              the filename. Format is <code>fieldexpr=match%value</code> so if
              you wanted to set a tag based on part of filenames that start
              with gre use <code>tags=/gre-(.*)\\.pcap%gretest-\\1</code>.
              Notice two backslashes are required everywhere you want one
              because of ini formating.
            </td>
          </tr>
          <tr>
            <td id="fragstimeout">
              fragsTimeout
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              480
            </td>
            <td>
              Number of seconds to keep around an ip fragment and try an reassemble it
            </td>
          </tr>
          <tr>
            <td id="hstsheader">
              hstsHeader
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE
            </td>
            <td>
              From viewer, return a hsts header on responses
            </td>
          </tr>
          <tr>
            <td id="huntwarn">
              huntWarn
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              100000
            </td>
            <td>
              (Since 1.6.0) Warn users when creating a hunt if more then this
              many sessions will be searched
            </td>
          </tr>
          <tr>
            <td id="huntlimit">
              huntLimit
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              1000000
            </td>
            <td>
              (Since 1.6.0) Do not create hunts for non admin users if more
              then this many sessions will be searched
            </td>
          </tr>
          <tr>
            <td id="huntadminlimit">
              huntAdminLimit
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              10000000
            </td>
            <td>
              (Since 1.6.0) Do not create hunts for admin users if more then
              this many sessions will be searched
            </td>
          </tr>
          <tr>
            <td id="iframe">
              iframe
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              deny
            </td>
            <td>
              Used to set the <code>X-Frame-Options</code> header for putting
              Moloch in an iFrame. Options include "deny", "notallowed", or a
              URL to allow from.
            </td>
          </tr>
          <tr>
            <td id="includes">
              includes
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              &nbsp;
            </td>
            <td>
              Semicolon ';' separated list of files to load for config values.
              Files are loaded in order and can replace values set in this file
              or previous files. Setting includes is only supported in the top
              level config file.
            </td>
          </tr>
          <tr>
            <td id="interfaceops">
              interfaceOps
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              (Since 1.5.0) A semicolon separated list of a comma separted list
              of operations to set for each interface. The semicolon list must
              have the same number of elements as the interface setting. The
              format is <code>fieldexp=value</code>.
            </td>
          </tr>
          <tr>
            <td id="islocalviewregexp">
              isLocalViewRegExp
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              (Since 1.6.1) If the node matches the supplied regexp, then the
              node is considered local.
            </td>
          </tr>
          <tr><td id="ja3strings">ja3Strings<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              FALSE
            </td>
            <td>
              (Since 2.0) Index the raw JA3 strings before hashing them
            </td>
          </tr>
          <tr>
            <td id="maxesconns">
              maxESConns
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              20
            </td>
            <td>
              Max number of connections to Elasticsearch from capture process
            </td>
          </tr>
          <tr>
            <td id="maxesrequests">
              maxESRequests
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              500
            </td>
            <td>
              Max number of Elasticsearch requests outstanding in queue
            </td>
          </tr>
          <tr>
            <td id="maxfreeoutputbuffers">
              maxFreeOutputBuffers
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              50
            </td>
            <td>
              For capture, the max number of free output buffers we keep around before returning them to the OS
            </td>
          </tr>
          <tr>
            <td id="maxfrags">
              maxFrags
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              10000
            </td>
            <td>
              Max number of ip fragment packets to save and try and match at once
            </td>
          </tr>
          <tr>
            <td id="maxmempercentage">
              maxMemPercentage
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              100
            </td>
            <td>
              If moloch exceeds this amount of memory it will log an error and
              send itself a SIGSEGV that should produce a core file.
            </td>
          </tr>
          <tr>
            <td id="maxreqbody">
              maxReqBody
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              256
            </td>
            <td>
              For HTTP requests, store this many bytes in the http.requestBody field.  Can be disabled by setting to 0.
            </td>
          </tr>
          <tr>
            <td id="reqbodyonlyutf8">
              reqBodyOnlyUtf8
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              TRUE
            </td>
            <td>
              Only store request bodies that are utf8
            </td>
          </tr>
          <tr>
            <td id="maxtcpoutoforderpackets">
              maxTcpOutOfOrderPackets
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              256
            </td>
            <td>
              (Since 1.5.0) Max number of tcp packets to track while trying to
              reassemble the TCP stream
            </td>
          </tr>
          <tr>
            <td id="offlinedispatchafter">
              offlineDispatchAfter
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              pre 2.1 - 5000 (unchangable)<br>
              2.1,2.2 - 1000<br>
              2.3 - 2500<br>
            </td>
            <td>
              How many packets to read from offline pcap files at once.
            </td>
          </tr>
          <tr>
            <td id="offlinefilenameregex">
              offlineFilenameRegex
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              (?i)\.(pcap|cap)$
            </td>
            <td>
              Regexp to control which filenames are processed when using the -R
              option to moloch-capture.
            </td>
          </tr>
          <tr>
            <td id="pcapbuffersize">
              pcapBufferSize
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              100000
            </td>
            <td>
              pcap library buffer size, see man pcap_set_buffer_size
            </td>
          </tr>
          <tr>
            <td id="pcapreadmethod">
              pcapReadMethod
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              libpcap
            </td>
            <td>
              Specify how packets are read from network cards:
              <ul class="mb-0">
                <li>
                  libpcap = Use libpcap
                </li>
                <li>
                  pfring = Use pfring directly, requires
                  rootPlugins=reader-pfring.so
                </li>
                <li>
                  daq = Use daq, requires rootPlugins=reader-daq.so
                </li>
                <li>
                  snf = Use Myricom snf, requires rootPlugins=reader-snf.so
                </li>
                <li>
                  tpacketv3 = Use linux tpacketv3 (afpacket) interface
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="pcapwritemethod">
              pcapWriteMethod
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              normal
            </td>
            <td>
              Specify how packets are written to disk:
              <ul class="mb-0">
                <li>
                  simple = what you should probably use
                </li>
                <li>
                  simple-nodirect = use this with zfs/nfs
                </li>
                <li>
                  s3 = write packets into s3
                </li>
                <li>
                  null = don't write to disk at all
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="pcapwritesize">
              pcapWriteSize
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              262144
            </td>
            <td>
              Buffer size when writing pcap files. Should be a multiple of the
              raid 5/xfs stripe size and multiple of 4096 if using
              direct/thread-direct pcapWriteMethod
            </td>
          </tr>
          <tr>
            <td id="prefix">
              prefix
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              It is possible for multiple Moloch clusters to live inside the
              same Elasticsearch cluster by giving each Moloch cluster a
              different prefix value.
            </td>
          </tr>
          <tr>
            <td id="queryallindices">
              queryAllIndices
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE for viewer, TRUE for multiviewer
            </td>
            <td>
              (Since 1.5.0) Always query all indices instead of trying to
              calculate which ones. Use this if searching across that use
              different rotateIndex values.
            </td>
          </tr>
          <tr>
            <td id="saveunknownpackets">
              saveUnknownPackets
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              (Since 1.5.2) Save unknown ether, ip, or corrupt packets into
              separate files. This variable takes a semicolon separated list of
              the following values (applied in order):
              <ul class="mb-0">
                <li>
                  all = save all unknown ip and ether packets
                </li>
                <li>
                  ip:all = save all unknown ip packets
                </li>
                <li>
                  ether:all = save all unknown ether packets
                </li>
                <li>
                  ip:N = save all unknown ip packets with type of N
                </li>
                <li>
                  -ip:N = don't save all unknown ip packets with type of N
                </li>
                <li>
                  ether:N = save all unknown ether packets with type of N
                </li>
                <li>
                  -ether:N = don't save all unknown ether packets with type of
                  N
                </li>
                <li>
                  corrupt = save all corrupt packets (Since 1.5.3)
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="simpleencoding">
              simpleEncoding
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Moloch support <a href="#pcap-at-rest-encryption">PCAP at Rest Encryption</a>.
            </td>
          </tr>
          <tr>
            <td id="simplemaxq">
              simpleMaxQ
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              2000
            </td>
            <td>
              (since 2.0.1) The maximum number of disk queue entries per capture node.
              Once this limit is hit, packets will not be saved to disk until the disk queue falls below the threshold.
              The packets will still be processed, so all meta data is still extracted.
              Sessions that have packets not written to disk will be tagged with pcap-disk-overload.
              Increasing this value will use more memory when there is disk congestion.
            </td>
          </tr>
          <tr>
            <td id="snaplen">
              snapLen
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              16384
            </td>
            <td>
              The maximum size of a packet Moloch will read off
              the interface. This can be changed to fix the "Moloch requires
              full packet captures" error. It is recommend that instead of
              changing this value that all the card "offline" features are
              turned off so that moloch gets a picture of whats on the network
              instead of what the capture card has reassembled. For VMs, those
              features must be turned off on the physical interface and not the
              virtual interface. This setting can be used when changing the
              settings isn't possible or desired.
            </td>
          </tr>
          <tr>
            <td id="trackesp">
              trackESP
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE
            </td>
            <td>
              (Since 1.5.0) Add ESP sessions to Moloch, no decoding
            </td>
          </tr>
          <tr>
            <td id="uploadcommand">uploadCommand<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              EMPTY
            </td>
            <td>
              If set uploads from the UI are allowed.  An upload saves the file and runs capture on it, so its better to just run capture instead of using upload if you can.
              Example setting would be <code>/data/moloch/bin/moloch-capture --copy -n {NODE} -r {TMPFILE} -c {CONFIG} {TAGS}</code>.  <br>
              The following templated values will be filled in for you:
              <ul>
                <li>NODE - The node name of the viewer that received the upload</li>
                <li>TMPFILE - The tmp file name uploaded to</li>
                <li>CONFIG - The config file path used to start viewer</li>
                <li>TAGS - The tags set with the upload</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="uploadfilesizelimit">uploadFileSizeLimit<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              EMPTY
            </td>
            <td>
              (Since 2.0) If set, the max size of pcap files that can be uploaded from the UI
            </td>
          </tr>
          <tr>
            <td id="userselasticsearch">
              usersElasticsearch
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Set this option to which single elasticsearch cluster to use for the users index.
              It is possible for multiple Moloch clusters to share the same users table, so that the same accounts and settings work across all clusters.
              So the elasticsearch setting would point to a unique elasticsearch cluster per Moloch cluster, while the usersElasticsearch setting would point to a single shared Elasticsearch cluster.
              Same format as the <a href="#elasticsearch">elasticsearch</a> option.
            </td>
          </tr>
          <tr>
            <td id="usersprefix">
              usersPrefix
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              [PREFIX] if set otherwise EMPTY
            </td>
            <td>
              Like prefix but only for the users table.
            </td>
          </tr>
          <tr>
            <td id="valueautocomplete">
              valueAutoComplete
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              ![multiES] otherwise true
            </td>
            <td>
              Autocomplete field values in the search expression.
            </td>
          </tr>
        </tbody>
      </table>

      <!-- reader tpacketv3 settings -->
      <h3 id="reader-tpacketv3-settings">
        Reader tpacketv3 Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h3>
      <p>
        Tpacketv3 is the preferred reader for moloch and can be used on most
        3.x or later kernels. Configure moloch-capture to use tpacketv3 as the reader
        method with <code>pcapReadMethod=tpacketv3</code> in your configuration
        file. This is also know as afpacket.
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="tpacketv3blocksize">
              tpacketv3BlockSize
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              2097152
            </td>
            <td>
              The block size in bytes used for reads from each interface. There are 120 blocks per interface.
            </td>
          </tr>
          <tr>
            <td id="tpacketv3numthreads">
              tpacketv3NumThreads
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              2
            </td>
            <td>
              The number of threads used to read packets from each interface. These threads take the packets from the AF packet interface and place them into the packet queues.
            </td>
          <tr><td id="tpacketv3clusterid">tpacketv3ClusterId<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              0
            </td>
            <td>
              (Since 2.0) The cluster id for use with PACKET_FANOUT
            </td>
          </tr>
          </tr>
        </tbody>
      </table>
      <p class="mb-0">
        Example:
      </p>
      <pre>[default]
pcapReadMethod=tpacketv3
tpacketv3BlockSize=2097152
interface=eth0
tpacketv3NumThreads=2</pre>
      <!-- /reader tpacketv3 settings -->

      <!-- reader daq settings -->
      <h3 id="reader-daq-settings">
        Reader daq Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h3>
      <p class="mb-0">
        To use daq:
      </p>
      <ul>
        <li>
          load the daq plugin by changing configuration file so it has
          reader-daq.so as a rootPlugins
          <code>rootPlugins=reader-daq.so</code>
        </li>
        <li>
          tell moloch-capture to use daq as the reader method with
          <code>pcapReadMethod=daq</code> in your configuration file
        </li>
        <li>
          optionally change <code>interface</code> to any special daq interface
          value
        </li>
      </ul>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="daqmoduledirs">
              daqModuleDirs
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              /usr/local/lib/daq
            </td>
            <td>
              Directories where the daq modules live
            </td>
          </tr>
          <tr>
            <td id="daqmodule">
              daqModule
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              pcap
            </td>
            <td>
              The daq module to use
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /reader daq settings -->

      <!-- reader pfring settings -->
      <h3 id="reader-pfring-settings">
        Reader pfring Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h3>
      <ul>
        <li>
          We suggest you try tpacketv3 (afpacket) first if available on the
          host
        </li>
        <li>
          install the pfring package on all hosts that will run moloch-capture
          from
          <a class="no-decoration"
            href="http://packages.ntop.org/"
            rel="nofollow">http://packages.ntop.org/</a>
        </li>
        <li>
          load the pfring plugin by changing configuration file so it has
          reader-pfring.so as a rootPlugins
          <code>rootPlugins=reader-pfring.so</code>
        </li>
        <li>
          Configure moloch-capture to use pfring as the reader method with
          <code>pcapReadMethod=pfring</code> in your configuration file
        </li>
        <li>
          optionally change <code>interface</code> to any special pfring
          interface value
        </li>
      </ul>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="pfringclusterid">
              pfringClusterId
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              0
            </td>
            <td>
              The pfring cluster id
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /reader pfring settings -->

      <!-- reader snf settings -->
      <h3 id="reader-snf-settings">
        Reader snf Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h3>
      <ul>
        <li>
          install the snf package on all hosts that will run moloch-capture
        </li>
        <li>
          load the snf plugin by changing configuration file so it has
          reader-snf.so as a rootPlugins <code>rootPlugins=reader-snf.so</code>
        </li>
        <li>
          Configure moloch-capture to use snf as the reader method with
          <code>pcapReadMethod=snf</code> in your configuration file
        </li>
        <li>
          optionally change <code>interface</code> to any special snf
          interface value
        </li>
      </ul>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="snfnumrings">
              snfNumRings
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              1
            </td>
            <td>
              Number of rings per interface
            </td>
          </tr>
          <tr>
            <td id="snfdataringsize">
              snfDataRingSize
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              0
            </td>
            <td>
              The data ring size to use, 0 means use the SNF default
            </td>
          </tr>
          <tr><td id="snfflags">snfFlags<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              -1
            </td>
            <td>
              Controls process-sharing (1), port aggregation (2), and packet duplication (3). (Default value uses SNF_FLAGS environment variable)
            </td>
          </tr>
          <tr><td id="snfnumprocs">snfNumProcs<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              1
            </td>
            <td>
              (Since 2.0) The numer of capture processes listening on the shared interface
            </td>
          </tr>
          <tr><td id="snfprocnum">snfProcNum<span class="fa fa-link small copy-link cursor-copy" onclick="copyLink(this, 'settings')"></span></td>
            <td>
              0
            </td>
            <td>
              (Since 2.0) Which capture process this is if using a shared interface
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /reader snf settings -->

      <!-- writer s3 settings -->
      <h3 id="writer-s3-settings">
        Writer S3 Settings
      </h3>
      <div>
        See <a href="s3">S3</a> document for more information about using S3 for PCAP storage.
      </div>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="s3region">
              s3Region
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              us-east-1
            </td>
            <td>
              S3 Region to send data to
            </td>
          </tr>
          <tr>
            <td id="s3bucket">
              s3Bucket
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              none
            </td>
            <td>
              S3 Bucket to store pcap info
            </td>
          </tr>
          <tr>
            <td id="s3accesskeyid">
              s3AccessKeyId
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              (Since 2.1) Obtained from the EC2 IAM Role.
            </td>
            <td>
              &nbsp;
            </td>
          </tr>
          <tr>
            <td id="s3secretaccesskey">
              s3SecretAccessKey
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              (Since 2.1) Obtained from the EC2 IAM Role.
            </td>
            <td>
              &nbsp;
            </td>
          </tr>
          <tr>
            <td id="s3compress">
              s3Compress
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE
            </td>
            <td>
              Should traffic be compressed before sending
            </td>
          </tr>
          <tr>
            <td id="s3writegzip">
              s3WriteGzip
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              FALSE
            </td>
            <td>
              (Since 2.1) Should the PCAP files be stored on S3 in gzipped form
            </td>
          </tr>
          <tr>
            <td id="s3storageclass">
              s3StorageClass
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              STANDARD
            </td>
            <td>
              (Since 2.1) The S3 storage class to use&emdash;this has pricing implications
            </td>
          </tr>
          <tr>
            <td id="s3pathaccessstyle">
              s3PathAccessStyle
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              TRUE if there is a period in the bucket name.
            </td>
            <td>
              (Since 2.1) If true use s3.amazonaws.com/s3Bucket if false use s3Bucket.s3.amazonaws.com
            </td>
          </tr>
          <tr>
            <td id="s3maxconns">
              s3MaxConns
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              20
            </td>
            <td>
              Max connections to S3
            </td>
          </tr>
          <tr>
            <td id="s3maxrequests">
              s3MaxRequests
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              500
            </td>
            <td>
              Max number of outstanding S3 requests
            </td>
          </tr>
          <tr>
            <td id="s3ExpireDays">
              s3ExpireDays
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              none
            </td>
            <td>
              Expiration days for S3 stored PCAP files. Expired PCAP files will be deleted.
            </td>
          </tr>
          <tr>
            <td id="s3host">
              s3Host
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              none
            </td>
            <td>
              Override the default endpoint URL for the specified Bucket and Region. This is only
              used if you want to use a third party s3 server, like a
              <a href="https://min.io/">MinIO</a> or <a href="http://pithos.io/">pithos</a>
              instance.
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /writer s3 settings -->
      <!-- /advanced settings -->

      <!-- debug settings -->
      <h2 id="debug-settings">
        Debug Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="logesrequests">
              logESRequests
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              Write to stdout Elasticsearch requests
            </td>
          </tr>
          <tr>
            <td id="logeveryxpackets">
              logEveryXPackets
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              50000
            </td>
            <td>
              Write to stdout info every X packets. Set to -1 to never log status.
            </td>
          </tr>
          <tr>
            <td id="logfilecreation">
              logFileCreation
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              Write to stdout file creation information
            </td>
          </tr>
          <tr>
            <td id="loghttpconnections">
              logHTTPConnections
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              true for online captures
            </td>
            <td>
              Log http connection attempts and information
            </td>
          </tr>
          <tr>
            <td id="logunknownprotocols">
              logUnknownProtocols
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              Write to stdout unknown IP protocols
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /debug settings -->

      <!-- custom-fields -->
      <h2 id="custom-fields">
        custom-fields
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        You can add custom fields to Moloch several ways, including the wise
        and tagger plugins. Since Moloch 1.5.2 the easiest way is to use a
        [custom-fields] section in the ini file. At capture startup it will
        check to make sure all those fields exist in the database. The format
        of the line is the similar as used in wise and tagger, except you use
        <code>expression=definition</code>. You will need to also create a
        [custom-views] section to display the data on the Sessions tab.
      </p>
      <p class="mb-0">
        Field definition:
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="fields-field">
              field
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The field expression, overrides the key in the ini file
            </td>
          </tr>
          <tr>
            <td id="fields-kind">
              kind
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              REQUIRED
            </td>
            <td>
              <ul class="mb-0">
                <li>integer</li>
                <li>ip</li>
                <li>lotermfield - lowercased string</li>
                <li>termfield - string</li>
                <li>uptermfield - uppercased string</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="fields-count">
              count
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              Track number of items with a .cnt field auto created
            </td>
          </tr>
          <tr>
            <td id="fields-friendly">
              friendly
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              fieldname
            </td>
            <td>
              A SHORT description, used in SPI View
            </td>
          </tr>
          <tr>
            <td id="fields-db">
              db
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              REQUIRED
            </td>
            <td>
              The DB field name
            </td>
          </tr>
          <tr>
            <td id="fields-group">
              group
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              Before first dot in field or general
            </td>
            <td>
              Category for SPI view
            </td>
          </tr>
          <tr>
            <td id="fields-nolinked">
              nolinked
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              (Since 2.1.0) Set to true for linked sessions to have independent values for this field
            </td>
          </tr>
          <tr>
            <td id="fields-noutf8">
              noutf8
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              (Since 2.1.1) Set to true for the field to be 8 bit instead of utf8
            </td>
          </tr>
          <tr>
            <td id="fields-help">
              help
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              fieldname
            </td>
            <td>
              Help to display in about box or help page
            </td>
          </tr>
        </tbody>
      </table>
      <pre><code>[custom-fields]
# Format is FieldExpr=text format
theexpression=db:theexpression

sample.md5=db:sample.md5;kind:lotermfield;friendly:Sample MD5;count:true;help:MD5 of the sample</code></pre>
      <!-- /custom-fields -->

      <!-- custom-views -->
      <h2 id="custom-views">
        custom-views
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        With Moloch "views" are how the SPI data is displayed in the Sessions
        tab. Usually there is a unique "view" for each category of data. You
        can add custom views to Moloch several ways, including the wise and
        tagger plugins. Since Moloch 1.5.2 the easiest way is to use a
        [custom-views] section in the ini file. At viewer startup, a new
        section will be created for each entry. The format of the line is
        <code>name=definition</code>. Viewer will sort all views by name when
        choosing the order to display in.
      </p>
      <p class="mb-0">
        Field definition:
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="views-fields">
              fields
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              REQUIRED
            </td>
            <td>
              A comma separated list of field expression to display. They will
              be displayed in order listed.
            </td>
          </tr>
          <tr>
            <td id="views-title">
              title
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              Defaults to name
            </td>
            <td>
              The title to get the section on Sessions tab
            </td>
          </tr>
          <tr>
            <td id="views-require">
              require
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              REQUIRED
            </td>
            <td>
              The db session name to require be set to show the section.
            </td>
          </tr>
        </tbody>
      </table>
      <pre><code>[custom-views]
sample=title:Samples;require:sample;fields:sample.md5,sample.house

[custom-fields]
sample.md5=db:sample.md5;kind:lotermfield;friendly:Sample MD5;count:true;help:MD5 of the sample
sample.house=db:sample.house;kind:termfield;friendly:Sample House;count:true;help:House the sample lives in</code></pre>
      <!-- /custom-views -->

      <!-- moloch-clusters -->
      <h2 id="moloch-clusters">
        moloch-clusters
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        The moloch-clusters section is used to describe the various
        moloch-clusters that are available to forward traffic to either
        manually or through the CRON functionality. Each line represents a
        single cluster, with the name just being any unique string.
      </p>
      <pre><code>[moloch-clusters]
cluster1=url:https://moloch.example.com:8005;passwordSecret:password;name:Cluster
cluster2=url:https://cluster2.example.com:8005;passwordSecret:foo;name:Test Cluster</code></pre>
      <table class="table table-bordered table-sm table-striped">
        <tbody>
          <tr>
            <td id="clusters-url">
              url
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The base url to use to contact cluster
            </td>
          </tr>
          <tr>
            <td id="clusters-passwordsecret">
              passwordSecret
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The passwordSecret for the remote cluster, if it is different
              from current cluster
            </td>
          </tr>
          <tr>
            <td id="clusters-name">
              name
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              Friendly name to display in UI
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /moloch-clusters -->

      <!-- multi viewer settings -->
      <h2 id="multi-viewer-settings">
        Multi Viewer Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        The multi viewer is useful when you have multiple Moloch clusters that
        you want to search across. To use the multi viewer, an extra viewer
        process and a multies process must be started. The viewer process works
        like a normal viewer process, except instead of talking to a
        elasticsearch server, it talks to a multies server that proxies the
        queries to all the real elasticsearch servers. These two processes can
        share the same config file and node name section. The viewer part uses
        the SAME configuration values as above if you need to set anything.
      </p>
      <p class="mb-0">
        A sample configuration for multi viewer (the elasticsearch variable
        points to the multies.js process):
      </p>
      <pre><code>[multi-viewer]
elasticsearch=127.0.0.1:8200
viewPort = 8009
viewHost = localhost
multiES = true
multiESPort = 8200
multiESHost = localhost
multiESNodes = escluster1.example.com:9200,prefix:PREFIX;escluster2.example.com:9200</code></pre>
      <p class="mb-0">
        Which you would then use by starting both the multiviewer and multies.
        This is a sample for running manually (but you should setup startup
        scripts to run for real):
      </p>
      <pre><code>cd /data/moloch/viewer
/data/moloch/bin/node multies.js -n multi-viewer
/data/moloch/bin/node viewer.js -n multi-viewer</code></pre>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="multies">
              multiES
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false
            </td>
            <td>
              This is the multiES node
            </td>
          </tr>
          <tr>
            <td id="multiesport">
              multiESPort
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              8200
            </td>
            <td>
              Port that multies.js should listen on
            </td>
          </tr>
          <tr>
            <td id="multieshost">
              multiESHost
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Host interface that multies.js should listen on
            </td>
          </tr>
          <tr>
            <td id="multiesnodes">
              multiESNodes
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon separated list of Elasticsearch nodes that MultiES should connect to. The first node listed will be considered the primary node and is used for users/views/queries. An optional "prefix:" element can follow each host
              if that cluster was setup with an Elasticsearch prefix.
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /multi viewer settings -->

      <!-- override-ips -->
      <h2 id="override-ips">
        override-ips
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        override-ips is a special section that overrides the MaxMind databases
        for the fields set, but fields not set will still use MaxMind (example
        if you set tags but not country it will use MaxMind for the country)
        Spaces and capitalization are very important.
      </p>
      <pre><code>[override-ips]
10.1.0.0/16=tag:ny-office;country:USA;asn:AS0000 This is neat</code></pre>
      <table class="table table-bordered table-sm table-striped">
        <tbody>
          <tr>
            <td id="override-ips-tag">
              tag
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A single tag to set for matches
            </td>
          </tr>
          <tr>
            <td id="override-ips-country">
              country
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A 3 character country code to set for matches
            </td>
          </tr>
          <tr>
            <td id="override-ips-asn">
              asn
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              An ASN value to set for matches
            </td>
          </tr>
          <tr>
            <td id="override-ips-rir">
              rir
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A RIR value to set for matches
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /override-ips -->

      <!-- headers-http-request -->
      <h2 id="headers-http-request">
        headers-http-request
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        This section makes it easy to specify HTTP Request headers to index.
        They will be searchable in the UI using http.[HEADERNAME]
      </p>
      <pre><code>[headers-http-request]
referer=type:string;count:true;unique:true</code></pre>
      <table class="table table-bordered table-sm table-striped">
        <tbody>
          <tr>
            <td id="headers-http-request-type">
              type
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              <ul class="mb-0">
                <li>string - index as a string</li>
                <li>integer - index as an integer</li>
                <li>ip - index as an IP</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="headers-http-request-unique">
              unique
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              true by default, only index unique values
            </td>
          </tr>
          <tr>
            <td id="headers-http-request-count">
              count
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              false by default, create a second field http.[HEADERNAME].cnt
              with the number items found
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /headers-http-request -->

      <!-- headers-http-response -->
      <h2 id="headers-http-response">
        headers-http-response
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        This section makes it easy to specify HTTP Request headers to index.
        They will be searchable in the UI using http.[HEADERNAME]
      </p>
      <pre><code>[headers-http-response]
location=type:string
server=type:string</code></pre>
      <!-- /headers-http-response -->

      <!-- headers-email -->
      <h2 id="headers-email">
        headers-email
      </h2>
      <p>
        This section makes it easy to specify email headers to index. They will
        be searchable in the UI using email.[HEADERNAME]
      </p>
      <pre><code>[headers-email]
x-priority=type:integer</code></pre>
      <!-- /headers-email -->

      <!-- right-click -->
      <h2 id="right-click">
        right-click
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        It is possible to configure right click actions on any SPI data fields.
        Right click actions can be added based on either the field name or the category of the data.
        They can be added either in the configuration file or by enabled WISE data sources.
      </p>
      <p class="mb-0">
        Configuration File Sample:
      </p>
      <pre><code>[right-click]
VTIP=url:https://www.virustotal.com/en/ip-address/%TEXT%/information/;name:Virus Total IP;category:ip
VTHOST=url:https://www.virustotal.com/en/domain/%HOST%/information/;name:Virus Total Host;category:host
VTURL=url:https://www.virustotal.com/latest-scan/%URL%;name:Virus Total URL;category:url</code></pre>
      <p class="mb-0">
        Each line in the right-click section contains possible actions:
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Piece
            </th>
            <th>
              Notes
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="right-click-key">
              [key]=
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The key must be unique and is also used as the right click menu
              name if the name field is missing
            </td>
          </tr>
          <tr>
            <td id="right-click-actionType">
              actionType
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              Needs a url. Supported actionTypes:
              <ul class="mb-0">
                <li>fetch: Information will be fetched and displayed in the rightclick menu for 5 seconds</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td id="right-click-func">
              func
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A javascript function body (feeds into new Function()) that returns a right click action formatted as an object.
              This is the recommended way if you need to omit the url from an action and can be used
              to place plain text in the menu.
              Value is not calculated so one of the keys in the returned action object must be "value" if you want to show name:value pair in the menu (but not req).
              Formatting substitutions will also be ignored.
            </td>
          </tr>
          <tr>
            <td id="right-click-url">
              url
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The url to open if selected. There are some basic URL
              substitutions defined below.
            </td>
          </tr>
          <tr>
            <td id="right-click-name">
              name
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The menu text to display
            </td>
          </tr>
          <tr>
            <td id="right-click-category">
              category
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              If the field that is right clicked on has this category then
              display this menu item. All right click entries must have either
              a category or fields variable defined.
            </td>
          </tr>
          <tr>
            <td id="right-click-fields">
              fields
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A comma separated list of field names. If the field that is right
              clicked on has one the field expressions in the list then display
              this menu item. All right click entries must have either a
              category or fields variable defined.
            </td>
          </tr>
          <tr>
            <td id="right-click-regex">
              regex
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A regex to use on the right clicked text to extract a piece for
              the URL. The first matching group is substituted for %REGEX% in
              the url. If the regex doesn't match at all then the menu isn't
              displayed.
            </td>
          </tr>
          <tr>
            <td id="right-click-users">
              users
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A comma separated list of user names that can see the right click
              item. If not set then all users can see the right click item.
            </td>
          </tr>
        </tbody>
      </table>
      <p class="mb-0">
        The possible URL Substitutions are:
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              URL Substitutions
            </th>
            <th>
              Notes
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="url-sub-text">
              %TEXT%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The text clicked on in raw form
            </td>
          </tr>
          <tr>
            <td id="url-sub-uctext">
              %UCTEXT%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The text clicked on, upper-cased
            </td>
          </tr>
          <tr>
            <td id="url-sub-url">
              %URL%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A URL extracted from the text clicked on
            </td>
          </tr>
          <tr>
            <td id="url-sub-host">
              %HOST%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A hostname extracted from the text clicked on. Sometimes the same as %TEXT%, sometimes a subset.
            </td>
          </tr>
          <tr>
            <td id="url-sub-regex">
              %REGEX%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The first regex group match
            </td>
          </tr>
          <tr>
            <td id="url-sub-expression">
              %EXPRESSION%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The search expression, URI encoded
            </td>
          </tr>
          <tr>
            <td id="url-sub-date">
              %DATE%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The search date/time range, eg., <code>startTime=1567447943&stopTime=1569607943</code> (UNIX seconds) for a custom date range or <code>date=336</code> (hours) for times relative to now
            </td>
          </tr>
          <tr>
            <td id="url-sub-isostart">
              %ISOSTART%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The beginning of the search date/time range, ISO_8601 formatted
            </td>
          </tr>
          <tr>
            <td id="url-sub-isostop">
              %ISOSTOP%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The end of the search date/time range, ISO_8601 formatted
            </td>
          </tr>
          <tr>
            <td id="url-sub-field">
              %FIELD%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The field name as it would be referenced in a Moloch search expression
            </td>
          </tr>
          <tr>
            <td id="url-sub-dbfield">
              %DBFIELD%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The field name as referenced in the underlying Elasticsearch database
            </td>
          </tr>
          <tr>
            <td id="url-sub-node">
              %NODE%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The name of the capture node
            </td>
          </tr>
          <tr>
            <td id="url-sub-sessionid">
              %ID%
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The session ID
            </td>
          </tr>
        </tbody>
      </table>
      <p class="mb-0">
        The categories that Moloch uses are:
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Category
            </th>
            <th>
              Notes
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="categories-ans">
              asn
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              An ASN field
            </td>
          </tr>
          <tr>
            <td id="categories-country">
              country
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A three letter country code
            </td>
          </tr>
          <tr>
            <td id="categories-host">
              host
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A domain or host name
            </td>
          </tr>
          <tr>
            <td id="categories-ip">
              ip
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              An ip address
            </td>
          </tr>
          <tr>
            <td id="categories-md5">
              md5
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A md5 of a payload, such as for http body or smtp attachment
            </td>
          </tr>
          <tr>
            <td id="categories-port">
              port
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The TCP/UDP port
            </td>
          </tr>
          <tr>
            <td id="categories-rir">
              rir
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              The Regional Internet Registry
            </td>
          </tr>
          <tr>
            <td id="categories-url">
              url
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A URL
            </td>
          </tr>
          <tr>
            <td id="categories-user">
              user
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              A user name or email address
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /right-click -->

      <!-- packet-drop-ips -->
      <h2 id="packet-drop-ips">
        packet-drop-ips
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>This section allows you to specify ips or cidrs to drop
        from being processed. This is different from a bpf filter since the
        packets will actually reach moloch-capture (and counted) but won't be
        fully processed. However if you have many ranges/ips to drop it can be
        more efficient then bpfs. It is possible to also allow ranges inside of
        dropped ranges using the "allow" keyword. Order added doesn't matter,
        searching always finds the best match.
      </p>
      <pre><code>[packet-drop-ips]
10.0.0.0/8=drop
10.10.0.0/16=allow
10.10.10.0/24=drop
10.10.10.10=allow</code></pre>
      <!-- /packet-drop-ips -->

      <!-- PCAP at Rest Encryption -->
      <h2 id="pcap-at-rest-encryption">
        PCAP at Rest Encryption
      </h2>
      <p>
        Moloch provides support for PCAP at rest encodings. Two forms of encodings
        are currently supported: "aes-256-ctr" and "xor-2048". Please note that xor-2048
        is not actually secure and is only for testing.
      </p>
      <p>
        The current implementation is based around openssl. The encoding that
        you wish to use is configured in the config file by setting the
        <code>simpleEncoding</code> variable. The simpleEncoding may be set
        either globally or per node.
      </p>
      <p>
        Each file on disk is encoded by a unique data encryption key (dek).
        The dek is encrypted using a key encryption key (kek) when stored.
        The encrypted dek, the id of the kek, and the initialization vector
        (IV) are all stored per file in Elasticsearch. Which kek is used when
        creating files, is selected with the <code>simpleKEKId</code>
        variable. The simpleKEKId may be set either globally or per node.
      </p>
      <p>
        The kek passwords that may be used should be placed in a
        <code>[keks]</code> section of the config file. There is one line for
        each kekid to kek mapping. An easy way to create kek passwords is
        <code>openssl rand -base64 30</code>. Remember a kek is password used
        to encrypt the dek and NOT the password used to encrypt the files.
        The dek is what is used to encrypt the files, and is unique per file.
      </p>
      <p>
        You MUST secure your config file.
      </p>
      <p>
        You are not required to use the same keks on all nodes, however, you
        can if you wish. It is recommended that you rotate your keks
        occasionally (timing dependent on your risk tolerance) and create new
        keks to be used. Do NOT delete the old keks until all pcaps which have
        been encoded with those keks have been expired.
      </p>
      <p>
        Currently it is not possible to re-encrypt a data encryption key,
        however, this should be possible in the future with a db.pl command.
      </p>
      <p class="mb-0">
        Example:
      </p>
      <pre><code>[default]
pcapWriteMethod=simple
simpleEncoding=aes-256-ctr
simpleKEKId=kekid1

[keks]
kekid1=Randomkekpassword1
kekid2=Randomkekpassword2
</code></pre>
      <p class="mb-0">
        Advantages:
      </p>
      <ul>
        <li>
          Don't need to mess with disk encryption
        </li>
        <li>
          Access to just the host doesn't give you access to the pcap file
        </li>
      </ul>
      <p class="mb-0">
        Disadvantages:
      </p>
      <ul>
        <li>
          Normal pcap tools will no longer work
        </li>
        <li>
          If the files index in elasticsearch gets corrupt, you can not
          reingest the files
        </li>
      </ul>
      <!-- /PCAP at Rest Encryption -->

      <!-- Plugins -->
      <h1 id="plugins"
        class="border-bottom">
        Plugins
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h1>

      <!-- WISE -->
      <h2 id="wise">
        WISE
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        See the
        <a class="no-decoration"
          href="wise">
          WISE page</a>
      </p>
      <!-- /WISE -->

      <!-- Netflow -->
      <h2 id="netflow">
        Netflow
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        Moloch can generate netflow for all sessions it saves SPI data for. Add
        <code>netflow.so</code> to the <code>plugins=</code> line in the config
        file.
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="netflowsnmpinput">
              netflowSNMPInput
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              0
            </td>
            <td>
              What to fill in the input field
            </td>
          </tr>
          <tr>
            <td id="netflowsnmpoutput">
              netflowSNMPOutput
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              0
            </td>
            <td>
              What to fill in the output field
            </td>
          </tr>
          <tr>
            <td id="netflowversion">
              netflowVersion
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              5
            </td>
            <td>
              Version of netflow to send: 1, 5, 7
            </td>
          </tr>
          <tr>
            <td id="netflowdestinations">
              netflowDestinations
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Semicolon ';' separated list of host:port destinations to send the netflow
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /Netflow -->

      <!-- Suricata -->
      <h2 id="suricata">
        Suricata
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        Moloch can enrich sessions with Suricata alerts. Suricata and
        Moloch must be running on the same machine and looking at the same
        traffic for the plugin to work. Sessions that have been enriched will
        have several new fields, all starting with suricata, and will be
        displayed in a Suricata section of the standard Moloch session UI.
        Moloch matches sessions based on the 5 tuple from the alert.json or
        eve.json file, only using items with event_type of alert. A very simple
        query to find all sessions that have Suricata data is
        <code>suricata.signature == EXISTS!</code>.
      </p>
      <p>
        <strong>Note:</strong> there isn't a special Suricata UI inside Moloch,
        this is just adding new fields to Moloch sessions like wise or tagger
        do. The Suricata enrichment is done by moloch-capture, so
        moloch-capture must see the traffic.
      </p>
      <p>
        Add <code>suricata.so</code> to the <code>plugins=</code> line in the
        config file.
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="suricataalertfile">
              suricataAlertFile
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              REQUIRED
            </td>
            <td>
              The full path to either the alert.json or eve.json file, make
              sure the <code>dropUser</code> or <code>dropGroup</code> can open
              the file
            </td>
          </tr>
          <tr>
            <td id="suricataexpireminutes">
              suricataExpireMinutes
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              60
            </td>
            <td>
              (Since 1.5.1) The number of minutes to keep Suricata alerts in memory before expiring them based on the Suricata alert timestamp. For example if a Suricata alert has a timestamp of 1am, the default is to keep looking for matching
              traffic until 2am (60 minutes).
            </td>
          </tr>
        </tbody>
      </table>
      <p class="mb-0">
        Sample Config:
      </p>
      <pre><code># Add suricata.so to your plugins line, or add a new plugins line
plugins=suricata.so

# suricataAlertFile should be the full path to your alert.json or eve.json file
suricataAlertFile=/nids/suricata/eve.json</code></pre>
      <!-- /Suricata -->

      <!-- Tagger -->
      <h2 id="tagger">
        Tagger
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        See the
        <a class="no-decoration"
          href="tagger">
          Tagger page</a>
        and the
        <a class="no-decoration"
          href="taggerformat">
          Tagger Format page</a>
      </p>
      <!-- /Tagger -->
      <!-- Lua -->
      <h2 id="lua">
        Lua
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        See the
        <a class="no-decoration"
          href="lua">
          Lua page</a>
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="luafiles">
              luaFiles
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              The Lua Files to load
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /Lua -->
      <!-- TCPHealthCheck -->
      <h2 id="tcphealthcheck">
        TCP Health Check
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h2>
      <p>
        TCP Health Check plugin enables
        the capture module to listen on
        a specific TCP port and immediately
        close accepted connections. This is useful
        to keep load balancer health checks informed
        about the capture module working properly.
        One specific use case is
        <a href="https://docs.aws.amazon.com/elasticloadbalancing/latest/network/target-group-health-checks.html">
          Health Checks for Target Groups
        </a>
        in AWS
        Network Load Balancer.
      </p>
      <p>
        Add <code>tcphealthcheck.so</code> to the <code>plugins=</code> line in the
        config file.
      </p>
      <table class="table table-bordered table-sm table-striped">
        <thead>
          <tr>
            <th>
              Setting
            </th>
            <th>
              Default
            </th>
            <th>
              Description
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="tcphealthcheckport">
              tcpHealthCheckPort
              <span class="fa fa-link small copy-link cursor-copy"
                onclick="copyLink(this, 'settings')">
              </span>
            </td>
            <td>
              EMPTY
            </td>
            <td>
              Make the capture module listen on this TCP port
              for health checks.
            </td>
          </tr>
        </tbody>
      </table>
      <!-- /TCPHealthCheck -->
      <!-- /Plugins -->

      <!-- High Performance Settings -->
      <h1 id="high-performance-settings"
        class="border-bottom">
        High Performance Settings
        <span class="fa fa-link small copy-link cursor-copy"
          onclick="copyLink(this, 'settings')">
        </span>
      </h1>
      <p>
        Sample config items for max performance. Most of
        the defaults are fine. Reading
        <a class="no-decoration"
          href="faq#why-am-i-dropping-packets">
          Moloch FAQ - Why am I dropping packets</a>
        and
        <a class="no-decoration"
          href="https://github.com/pevma/SEPTun">
          https://github.com/pevma/SEPTun</a>
        or
        <a class="no-decoration"
          href="https://github.com/pevma/SEPTun-Mark-II">
          https://github.com/pevma/SEPTun-Mark-II</a>
        may be helpful.
      </p>
      <pre><code># MOST IMPORTANT, use basic magicMode, libfile kills performance
magicMode=basic

pcapReadMethod=tpacketv3
tpacketv3BlockSize=8388608

# Increase by 1 if still getting Input Drops
tpacketv3NumThreads=2

pcapWriteMethod=simple
pcapWriteSize=4194304

# Start with 5 packet threads, increase by 1 if getting thread drops.  Should be about 1.5 x # Gbps that need to be captured
packetThreads=5

# Increase the size of ES messages and compress them for lower traffic rates
dbBulkSize=4000000
compressES=true
dbEsHealthCheck=false

# Set to number of packets a second, if still overflowing try 400k
maxPacketsInQueue = 300000

# Uncomment to disable features you don't need
# parseQSValue=false
# parseCookieValue=false</code></pre>
      <p class="mb-0">
        The following rules can help greatly reduce the number of SPI sessions
        being written to disk:
      </p>
      <pre><code>---
version: 1
rules:
- name: "Dont write tls packets or check yara after 10 packets, still save SPI"
  when: "fieldSet"
  fields:
    protocols:
    - tls
  ops:
    _dontCheckYara: 1
    _maxPacketsToSave: 10

- name: "Dont save SPI sessions to ES with only 1 src packet"
  when: "beforeFinalSave"
  fields:
    packets.src: 1
    packets.dst: 0
    tcpflags.syn: 1
  ops:
    _dontSaveSPI: 1

- name: "Dont save SPI data for listed hostnames tracked by dst ip:port, use on cloud destinations"
  when: "fieldSet"
  fields:
    host.http:
    - ad.doubleclick.net
    protocols:
    - tls
  ops:
    _dontSaveSPI: 1
    _maxPacketsToSave: 1
    _dropByDst: 10</code></pre>
      <!-- /High Performance Settings -->

    </div> <!-- /settings content -->

    <!-- footer -->
    {%- include footer.html -%}

  </div> <!-- /settings container -->

</body>

</html>
