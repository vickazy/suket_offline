          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="<?php echo ($this->uri->segment(1) == "dashboard")?"active":"" ?>"><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="<?php echo ($this->uri->segment(1)=="cetak_suket" || $this->uri->segment(1) == "daftar_cetak")?"active":"" ?> treeview">
              <a href="#">
                <i class="fa fa-print"></i> <span>Surat Keterangan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo ($this->uri->segment(1) == "cetak_suket")?"active":"" ?>"><a href="<?php echo site_url('cetak_suket') ?>"><i class="fa fa-circle-o"></i>Cetak</a></li>
                <li class="<?php echo ($this->uri->segment(1) == "daftar_cetak")?"active":"" ?>"><a href="<?php echo site_url('daftar_cetak') ?>"><i class="fa fa-circle-o"></i> Daftar Cetak</a></li>
              </ul>
            </li>
          </ul>