


<?php $__env->startSection('title', 'Kontak'); ?>
<?php $__env->startSection('meta_description', 'Hubungi ArcticFix untuk booking service AC dan elektronik. Kami siap melayani Senin–Minggu, 08.00–20.00.'); ?>

<?php $__env->startSection('content'); ?>

  <section class="page-hero">
    <div class="page-hero-inner">
      <div class="section-label">Kontak</div>
      <h1 class="section-title">Jadwalkan <em>Servis</em><br>Sekarang</h1>
      <p class="section-sub">Isi form di bawah atau hubungi kami langsung via WhatsApp. Teknisi kami siap datang dalam 2–3 jam.</p>
    </div>
  </section>

  <section class="kontak-section" style="background: white;">
    <div class="kontak-layout">

      
      <div class="kontak-form-wrap">
        <div class="section-label">Form Pemesanan</div>
        <h2 class="section-title" style="margin-bottom: 32px;">Ceritakan <em>Keluhannya</em></h2>

        <?php if(session('success')): ?>
          <div class="alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <form action="<?php echo e(route('kontak.kirim')); ?>" method="POST" class="kontak-form">
          <?php echo csrf_field(); ?>

          <div class="form-group">
            <label for="nama">Nama Lengkap <span class="required">*</span></label>
            <input type="text" id="nama" name="nama"
              value="<?php echo e(old('nama')); ?>"
              placeholder="Nama Anda"
              class="<?php echo e($errors->has('nama') ? 'is-error' : ''); ?>"
              required/>
            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="form-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="telepon">Nomor WhatsApp / Telepon <span class="required">*</span></label>
            <input type="tel" id="telepon" name="telepon"
              value="<?php echo e(old('telepon')); ?>"
              placeholder="08xx-xxxx-xxxx"
              class="<?php echo e($errors->has('telepon') ? 'is-error' : ''); ?>"
              required/>
            <?php $__errorArgs = ['telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="form-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat Lengkap <span class="required">*</span></label>
            <input type="text" id="alamat" name="alamat"
              value="<?php echo e(old('alamat')); ?>"
              placeholder="Jl., Kelurahan, Kecamatan, Kota"
              class="<?php echo e($errors->has('alamat') ? 'is-error' : ''); ?>"
              required/>
            <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="form-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="layanan">Jenis Layanan <span class="required">*</span></label>
            <select id="layanan" name="layanan"
              class="<?php echo e($errors->has('layanan') ? 'is-error' : ''); ?>"
              required>
              <option value="" disabled <?php echo e(old('layanan') ? '' : 'selected'); ?>>-- Pilih Layanan --</option>
              <optgroup label="AC">
                <option value="cuci-ac"         <?php echo e(old('layanan') == 'cuci-ac' ? 'selected' : ''); ?>>Cuci AC</option>
                <option value="isi-freon"        <?php echo e(old('layanan') == 'isi-freon' ? 'selected' : ''); ?>>Isi Freon</option>
                <option value="pasang-ac"        <?php echo e(old('layanan') == 'pasang-ac' ? 'selected' : ''); ?>>Pasang AC Baru</option>
                <option value="bongkar-pasang"   <?php echo e(old('layanan') == 'bongkar-pasang' ? 'selected' : ''); ?>>Bongkar Pasang AC</option>
                <option value="perbaikan-ac"     <?php echo e(old('layanan') == 'perbaikan-ac' ? 'selected' : ''); ?>>Perbaikan / Kerusakan AC</option>
              </optgroup>
              <optgroup label="Elektronik">
                <option value="kulkas"           <?php echo e(old('layanan') == 'kulkas' ? 'selected' : ''); ?>>Kulkas / Freezer</option>
                <option value="mesin-cuci"       <?php echo e(old('layanan') == 'mesin-cuci' ? 'selected' : ''); ?>>Mesin Cuci</option>
                <option value="televisi"         <?php echo e(old('layanan') == 'televisi' ? 'selected' : ''); ?>>Televisi / Monitor</option>
                <option value="water-heater"     <?php echo e(old('layanan') == 'water-heater' ? 'selected' : ''); ?>>Water Heater</option>
                <option value="microwave"        <?php echo e(old('layanan') == 'microwave' ? 'selected' : ''); ?>>Microwave / Oven</option>
                <option value="lainnya"          <?php echo e(old('layanan') == 'lainnya' ? 'selected' : ''); ?>>Lainnya</option>
              </optgroup>
            </select>
            <?php $__errorArgs = ['layanan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="form-error"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="keluhan">Keluhan / Keterangan</label>
            <textarea id="keluhan" name="keluhan" rows="4"
              placeholder="Ceritakan kerusakan atau keluhan perangkat Anda..."><?php echo e(old('keluhan')); ?></textarea>
          </div>

          <button type="submit" class="btn-primary" style="width:100%;text-align:center;cursor:pointer;border:none;">
            Kirim Permintaan Servis
          </button>
        </form>
      </div>

      
      <aside class="kontak-info">
        <div class="section-label">Hubungi Langsung</div>
        <h2 class="section-title" style="margin-bottom: 32px;">Kami Siap <em>Membantu</em></h2>

        <div class="kontak-info-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:var(--gold-light);">
              <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
          </div>
          <div>
            <div class="kontak-info-label">WhatsApp / Telepon</div>
            <a href="https://wa.me/6281234567890" class="kontak-info-value">0812-3456-7890</a>
          </div>
        </div>

        <div class="kontak-info-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:var(--gold-light);">
              <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
          </div>
          <div>
            <div class="kontak-info-label">Email</div>
            <a href="mailto:info@arcticfix.id" class="kontak-info-value">info@arcticfix.id</a>
          </div>
        </div>

        <div class="kontak-info-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:var(--gold-light);">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
          </div>
          <div>
            <div class="kontak-info-label">Alamat</div>
            <div class="kontak-info-value">Jl. Raya Bekasi No. 45, Jakarta Timur</div>
          </div>
        </div>

        <div class="kontak-info-item">
          <div class="keunggulan-icon">
            <svg viewBox="0 0 24 24" style="width:18px;height:18px;fill:var(--gold-light);">
              <path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm0 18a8 8 0 110-16 8 8 0 010 16zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z"/>
            </svg>
          </div>
          <div>
            <div class="kontak-info-label">Jam Operasional</div>
            <div class="kontak-info-value">Senin – Minggu, 08.00 – 20.00</div>
          </div>
        </div>

        
        <a href="https://wa.me/6281234567890?text=Halo%20ArcticFix,%20saya%20ingin%20booking%20servis"
           class="btn-primary"
           target="_blank"
           style="width:100%;text-align:center;margin-top:32px;display:block;">
          Chat via WhatsApp
        </a>
      </aside>

    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laravell\service-ac\resources\views/pages/kontak.blade.php ENDPATH**/ ?>