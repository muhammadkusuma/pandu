@extends('layouts.admin')

@section('title', 'Tulis Artikel Baru')
@section('header_title', 'Editor Artikel')

@section('content')

    @push('styles')
        <style>
            /* Mengatur tinggi minimal area edit */
            .ck-editor__editable_inline {
                min-height: 450px;
                padding: 2rem !important;
                /* Memberi ruang napas pada teks */
            }

            /* Menyesuaikan border radius agar match dengan desain PANDU */
            .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
                border-color: #e2e8f0;
                border-bottom-left-radius: 0.75rem !important;
                border-bottom-right-radius: 0.75rem !important;
            }

            .ck.ck-toolbar {
                border-color: #e2e8f0;
                border-top-left-radius: 0.75rem !important;
                border-top-right-radius: 0.75rem !important;
                background-color: #f8fafc !important;
            }

            /* Menghilangkan outline focus default CKEditor agar lebih rapi */
            .ck.ck-editor__editable.ck-focused:not(.ck-editor__nested-editable) {
                border-color: #3b82f6;
                /* Blue-500 */
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }
        </style>
    @endpush

    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <div class="lg:col-span-8 space-y-6">

                <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-200">
                    <input type="text" name="title" placeholder="Judul Artikel (Contoh: Cara Mengatasi Error Printer...)"
                        class="w-full text-3xl font-bold text-slate-900 placeholder:text-slate-300 border-none focus:ring-0 p-0 outline-none"
                        autofocus required>
                </div>

                <div class="bg-white rounded-xl shadow-sm border-none">
                    <textarea name="content" id="editor" placeholder="Tulis panduan lengkap di sini..."></textarea>
                </div>

            </div>

            <div class="lg:col-span-4 space-y-6">

                <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                    <h3
                        class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wide border-b border-slate-100 pb-2">
                        Publikasi</h3>

                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm text-slate-500">Status saat ini:</span>
                        <span class="bg-slate-100 text-slate-600 text-xs font-bold px-2 py-1 rounded">Draft</span>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Visibilitas</label>
                        <div class="space-y-2">
                            <label
                                class="flex items-start gap-3 p-3 border border-slate-200 rounded-lg cursor-pointer hover:bg-blue-50 hover:border-blue-300 transition has-[:checked]:bg-blue-50 has-[:checked]:border-blue-500">
                                <input type="radio" name="visibility" value="public" class="mt-1" checked>
                                <div>
                                    <span class="block text-sm font-bold text-slate-900">Public (Semua Staff)</span>
                                    <span class="block text-xs text-slate-500">Dokter & Perawat bisa baca.</span>
                                </div>
                            </label>
                            <label
                                class="flex items-start gap-3 p-3 border border-slate-200 rounded-lg cursor-pointer hover:bg-amber-50 hover:border-amber-300 transition has-[:checked]:bg-amber-50 has-[:checked]:border-amber-500">
                                <input type="radio" name="visibility" value="internal" class="mt-1">
                                <div>
                                    <span class="block text-sm font-bold text-slate-900">Internal (Divisi IT)</span>
                                    <span class="block text-xs text-slate-500">Hanya tim teknis.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <button type="submit"
                            class="w-full py-2.5 bg-blue-600 text-white rounded-lg font-bold hover:bg-blue-700 shadow-md transition flex justify-center items-center gap-2">
                            <i class="ph ph-paper-plane-right"></i> Terbitkan Sekarang
                        </button>
                        <button type="button"
                            class="w-full py-2.5 border border-slate-300 text-slate-600 rounded-lg font-medium hover:bg-slate-50 transition">
                            Simpan Draft
                        </button>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                    <h3
                        class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wide border-b border-slate-100 pb-2">
                        Pengaturan</h3>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-slate-700 mb-1">Kategori</label>
                        <select name="category_id"
                            class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none bg-white">
                            <option value="">Pilih Kategori...</option>
                            <option value="1">Hardware & Printer</option>
                            <option value="2">Jaringan & WiFi</option>
                            <option value="3">SIMRS Troubleshooting</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-slate-700 mb-1">Tags</label>
                        <input type="text" name="tags" placeholder="Contoh: error, epson, lambat"
                            class="w-full border border-slate-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                    <h3
                        class="font-bold text-slate-900 mb-4 text-sm uppercase tracking-wide border-b border-slate-100 pb-2">
                        Lampiran</h3>

                    <div
                        class="border-2 border-dashed border-slate-300 rounded-lg p-6 text-center hover:bg-slate-50 transition cursor-pointer group relative">
                        <input type="file" name="attachments[]"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" multiple>
                        <i
                            class="ph ph-cloud-arrow-up text-3xl text-slate-400 mb-2 group-hover:text-blue-500 transition"></i>
                        <p class="text-sm text-slate-600 font-medium">Klik untuk Upload</p>
                        <p class="text-xs text-slate-400 mt-1">PDF, DOCX (Max 5MB)</p>
                    </div>
                </div>

            </div>

        </div>
    </form>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                // Konfigurasi Toolbar (Opsional, defaultnya sudah bagus)
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', 'undo', 'redo'
                ],
                placeholder: 'Mulai tulis panduan di sini...',
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
