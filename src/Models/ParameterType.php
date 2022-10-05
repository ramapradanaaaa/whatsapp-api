<?php

namespace Xmark\WhatsappApi\Models;

abstract class ParameterType {
    const Text = 'text';
    const Currency = 'currency';
    const DateTime = 'date_time';
    const Document = 'document';
    const Image = 'image';
    const Video = 'video';
}