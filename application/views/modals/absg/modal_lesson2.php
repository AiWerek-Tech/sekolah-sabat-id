<!-- application/views/modals/absg/modal_lesson2.php -->
<div class="modal fade" id="modalLesson2" tabindex="-1" aria-labelledby="modallesson2Label" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header d-flex justify-content-between align-items-center">
                <span class="modal-title text-center flex-grow-1" id="modallesson2Label">
                    Pelajaran 2 - <?= $judul_pelajaran2?> (<?= $triwulan?>)
                </span>
                <div>
                    <a href="#" id="fullscreenIcon2" class="mr-3 text-secondary"><i class="fas fa-expand-arrows-alt"></i></a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>

              <div class="modal-body">
                  <iframe id="lesson2Content" src="https://sabbath-school.adventech.io/in/2024-03/02/01" style="width: 100%; height: 100%; border: none;" scrolling="auto"></iframe>
              </div>
              
              <div class="modal-footer">
                <!-- Outline: Tombol Hope TV -->
                <div class="float-left mr-2">
                    <span class="d-none d-sm-inline">Outline:</span>
                    <button type="button" class="btn btn-primary btn-sm ml-2" onclick="downloadFile('HopeTV.pdf')">
                        <span class="d-none d-sm-inline">Hope TV</span> <i class="fas fa-file-download"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm ml-2" onclick="downloadFile('Fustero.pdf')">
                        <span class="d-none d-sm-inline">Fustero</span> <i class="fas fa-file-download"></i>
                    </button>
                    </div>

                

                    <!-- Jarak -->
                    <div class="clearfix mt-2 d-block d-sm-none"></div>

                    <!-- Ringkasan: Tombol PDF -->
                    <span class="d-none d-sm-inline">Ringkasan:</span>
                    <button type="button" class="btn btn-warning btn-sm ml-2" onclick="downloadFile('Ringkasan.pdf')">
                        <span class="d-none d-sm-inline">PDF</span> <i class="fas fa-file-download"></i>
                    </button>

                    <!-- Tombol PPT -->
                    <button type="button" class="btn btn-info btn-sm ml-2" onclick="downloadFile('Ringkasan.pptx')">
                        <span class="d-none d-sm-inline">PPT</span> <i class="fas fa-file-download"></i>
                    </button>
                
                <!-- Tombol close di rata kanan -->
                <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Close</button>
              </div>





          </div>
      </div>
    </div>