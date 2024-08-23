#!/usr/bin/env python3

from pydexcom import Dexcom
from datetime import datetime

class ANSI_Compatible:
    END = '\x1b[0m'
    
    # If Foreground is False that means color effect on Background
    @staticmethod
    def Color(ColorNo, Foreground=True): # 0 - 255
        FB_G = 38 if Foreground else 48 # Effect on foreground or background
        return '\x1b[' + str(FB_G) + ';5;' + str(ColorNo) + 'm'

dexcom = Dexcom(username="YOUR EMAIL", password="YOUR PASSWORD")

bg = dexcom.get_current_glucose_reading()

glucose_number = str(bg.value)
glucose_json = str(bg.json)

timestamp = datetime.now().strftime('%Y-%m-%d %H:%M:%S')

with open('bg_file.txt', 'a', encoding="utf-8") as f:
    # f.write(f'{timestamp} - {glucose_number}\n')
    f.write(glucose_json+'\n')


# with open('bg_file.txt', 'w', encoding="utf-8") as f:
    # f.write(glucose_number)

print(glucose_number, bg.trend_arrow)


 