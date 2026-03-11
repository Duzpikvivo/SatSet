


<section class="all-layanan-section">
  <div class="section-label">Semua Layanan</div>
  <div class="section-title">Lebih Banyak <em>Solusi</em> untuk Anda</div>
  <div class="section-sub">Selain AC, kami juga menangani berbagai perangkat elektronik rumah tangga lainnya.</div>
  <div class="all-grid">

    <?php if(isset($semuaLayanan)): ?>
      
      <?php $__currentLoopData = $semuaLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="all-card">
          <div class="all-card-img">
            <img src="<?php echo e($item->gambar_url); ?>" alt="<?php echo e($item->nama); ?>"/>
          </div>
          <div class="all-card-body">
            <div class="all-card-label"><?php echo e($item->kategori); ?></div>
            <div class="all-card-title"><?php echo e($item->nama); ?></div>
            <div class="all-card-text"><?php echo e($item->deskripsi_singkat); ?></div>
            <a href="<?php echo e(route('layanan.show', $item->slug)); ?>" class="all-card-link">Detail layanan</a>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>
      
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/refrigerator/400/300" alt="Kulkas"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Elektronik Dapur</div>
          <div class="all-card-title">Kulkas & Freezer</div>
          <div class="all-card-text">Perbaikan kompresor, kebocoran freon, pintu tidak menutup rapat, dan permasalahan pendinginan lainnya.</div>
          <a href="<?php echo e(route('layanan.show', 'kulkas')); ?>" class="all-card-link">Detail layanan</a>
        </div>
      </div>
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/washing-machine/400/300" alt="Mesin Cuci"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Elektronik Rumah</div>
          <div class="all-card-title">Mesin Cuci</div>
          <div class="all-card-text">Service mesin cuci top loading dan front loading. Perbaikan motor, pompa air, bearing, dan papan kontrol.</div>
          <a href="<?php echo e(route('layanan.show', 'mesin-cuci')); ?>" class="all-card-link">Detail layanan</a>
        </div>
      </div>
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/television-repair/400/300" alt="TV"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Hiburan</div>
          <div class="all-card-title">Televisi & Monitor</div>
          <div class="all-card-text">Perbaikan TV LED, LCD, OLED. Masalah gambar, suara, panel rusak, backlight mati, dan mainboard.</div>
          <a href="<?php echo e(route('layanan.show', 'televisi')); ?>" class="all-card-link">Detail layanan</a>
        </div>
      </div>
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/water-heater/400/300" alt="Water Heater"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Sanitasi</div>
          <div class="all-card-title">Water Heater</div>
          <div class="all-card-text">Perbaikan dan penggantian elemen pemanas, thermostat, safety valve, dan instalasi water heater baru.</div>
          <a href="<?php echo e(route('layanan.show', 'water-heater')); ?>" class="all-card-link">Detail layanan</a>
        </div>
      </div>
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/microwave-oven/400/300" alt="Microwave"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Elektronik Dapur</div>
          <div class="all-card-title">Microwave & Oven</div>
          <div class="all-card-text">Service microwave tidak panas, magnetron lemah, pintu bermasalah, dan kerusakan komponen lainnya.</div>
          <a href="<?php echo e(route('layanan.show', 'microwave')); ?>" class="all-card-link">Detail layanan</a>
        </div>
      </div>
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/exhaust-fan/400/300" alt="Exhaust Fan"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Ventilasi</div>
          <div class="all-card-title">Exhaust Fan & Kipas</div>
          <div class="all-card-text">Perbaikan dan penggantian exhaust fan, kipas angin, dan ceiling fan. Termasuk instalasi baru.</div>
          <a href="<?php echo e(route('layanan.show', 'exhaust-fan')); ?>" class="all-card-link">Detail layanan</a>
        </div>
      </div>
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/dispenser/400/300" alt="Dispenser"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Elektronik Rumah</div>
          <div class="all-card-title">Dispenser & Pompa Air</div>
          <div class="all-card-text">Service dispenser tidak panas/dingin, kebocoran, dan perbaikan pompa air rumah tangga berbagai merk.</div>
          <a href="<?php echo e(route('layanan.show', 'dispenser')); ?>" class="all-card-link">Detail layanan</a>
        </div>
      </div>
      <div class="all-card">
        <div class="all-card-img"><img src="https://picsum.photos/seed/maintenance-contract/400/300" alt="Kontrak"/></div>
        <div class="all-card-body">
          <div class="all-card-label">Paket Hemat</div>
          <div class="all-card-title">Kontrak Perawatan</div>
          <div class="all-card-text">Paket perawatan berkala untuk rumah, kantor, atau kos-kosan. Hemat biaya, perangkat lebih awet.</div>
          <a href="<?php echo e(route('layanan.show', 'kontrak-perawatan')); ?>" class="all-card-link">Lihat paket</a>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section><?php /**PATH C:\Laravell\service-ac\resources\views/partials/semua-layanan.blade.php ENDPATH**/ ?>