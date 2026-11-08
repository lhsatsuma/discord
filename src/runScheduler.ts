declare global{
    var entryMode: string;
    var startTimeApp: Date;   
}

globalThis.entryMode = 'scheduler';
globalThis.startTimeApp = new Date();
const {default: entryPointApp} = await import('#src/entryPointScheduler.ts');
const main = new entryPointApp();
try{
    await main.init();
}catch(e){
    console.error('Error initializing scheduler:', e);
    process.exit();
}