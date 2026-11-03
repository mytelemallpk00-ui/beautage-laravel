@php /** @var \App\Models\InvestorReport $report */ @endphp
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">Badge label</label>
        <input type="text" name="badge_label" value="{{ old('badge_label', $report->badge_label) }}" required
               class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm">
    </div>
    <div>
        <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">Badge tone</label>
        <select name="badge_tone" class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm">
            @foreach (['purple', 'pink', 'emerald'] as $tone)
                <option value="{{ $tone }}" @selected(old('badge_tone', $report->badge_tone) === $tone)>{{ ucfirst($tone) }}</option>
            @endforeach
        </select>
    </div>
    <div class="md:col-span-2">
        <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">Title</label>
        <input type="text" name="title" value="{{ old('title', $report->title) }}" required
               class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm">
    </div>
    <div class="md:col-span-2">
        <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">Description</label>
        <textarea name="description" rows="4" required class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm">{{ old('description', $report->description) }}</textarea>
    </div>
    <div>
        <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">File label (optional)</label>
        <input type="text" name="file_label" value="{{ old('file_label', $report->file_label) }}" placeholder="PDF • 4.8 MB"
               class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm">
    </div>
    <div>
        <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">Sort order</label>
        <input type="number" name="sort_order" value="{{ old('sort_order', $report->sort_order) }}" min="0" required
               class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm">
    </div>
    <div class="md:col-span-2">
        <label class="block text-xs font-bold uppercase text-beautage-purple mb-1">Download toast message</label>
        <input type="text" name="download_message" value="{{ old('download_message', $report->download_message) }}" required
               class="w-full rounded-xl border border-purple-200 px-4 py-2 text-sm">
    </div>
</div>
